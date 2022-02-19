<?php

namespace ve\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use ve\drawers\GlobalStyle;

class VeController {
    // get
    public static function index(Request $request, Response $response, array $args): Response {
        $global_style = new GlobalStyle();

        $components = json_decode(file_get_contents(__DIR__ . '/../../page_last_version.json'), true);

        $body = array_reduce($components, function($r, $component) {
            ['_name' => $name] = $component;

            if (empty($component)) {
                return $r . (new \ve\drawers\VoidDrawer())->draw();
            } else if (
                strpos($name, 'nav-bar') || 
                strpos($name, 'navbar') || 
                strpos($name, 'header')
            ) {
                $c = new ('\\ve\\drawers\\' . (
                    implode('', array_map(
                        fn(string $c) => ucfirst($c), 
                        explode('_', str_replace('-', '_', $name))
                    ))
                ))($component);

                return $r . $c->draw();
            }

            $c = new ('\\ve\\drawers\\' . (
                empty($component) ? 
                    'VoidDrawer' : implode('', array_map(
                        fn(string $c) => ucfirst($c), 
                        explode('_', str_replace('-', '_', $component['_name']))
                    ))
                )
            )($component);

            return $r . <<<HTML
                <div id="ve-components" class="container">
                    {$c->draw()}
                </div>
            HTML;
        }, '');

        $template = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>OB1 Visual Editor</title>
                    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/fonts/HelvNeue55_W1G.woff2" rel="preload" as="font" type="font/woff2">
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet">
                        
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet">

                    {$global_style->draw()}
                </head>
                <body>
                    {$body}

                    <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js"></script>
                </body>
            </html>
        HTML;
        
        $response->getBody()->write($template);
        return $response;
    }

    // post
    public static function save(Request $request, Response $response, array $args): Response {
        $page = json_encode($request->getParsedBody());

        file_put_contents(__DIR__ . '/../../page_last_version.json', $page);

        $response->getBody()->write($page);
        return $response->withHeader('Content-Type', 'application/json');
    }

    // post
    public static function preview(Request $request, Response $response, array $args): Response {
        $component = $request->getParsedBody();

        $global_style = new GlobalStyle();

        $template = empty($component) ? <<<HTML
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>OB1 Visual Editor</title>
                    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/fonts/HelvNeue55_W1G.woff2" rel="preload" as="font" type="font/woff2">
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/fonts/HelvNeue75_W1G.woff2" rel="preload" as="font" type="font/woff2">
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet">
                            
                    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet">
                    <style>
                        button[class^=iframe-] span::before {
                            background-color: #1771E6;
                        }
                    </style>

                    {$global_style->draw()}
                </head>

                <body>
        HTML : '';

        $template .= '<main role="main" id="ve-components">';

        $_component = new ('\\ve\\drawers\\' . (
            empty($component) ? 
                'VoidDrawer' : implode('', array_map(
                    fn(string $c) => ucfirst($c), 
                    explode('_', str_replace('-', '_', $component['_name']))
                ))
            )
        )($component);

        if (
            !empty($component) && !(
                strpos($component['_name'], 'nav-bar') || 
                strpos($component['_name'], 'navbar') || 
                strpos($component['_name'], 'header')
            )
        ) {
            $template .= "
                <div class=\"container\">
                    {$_component->draw()}
                </div>
            ";
        } else {
            $template .= $_component->draw();
        }

        $template .= '</main>';

        $template .= empty($component) ? <<<HTML
            <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js"></script>
            </body>
        </html>
        HTML : '';

        $response->getBody()->write($template);
        return $response;
    }

    // get
    public static function current(Request $request, Response $response, array $args): Response {
        $json = '[]';
        if (file_exists(__DIR__ . '/../../page_last_version.json')) {
            $json = file_get_contents(__DIR__ . '/../../page_last_version.json');
        }

        $response->getBody()->write($json);
        return $response->withHeader('Content-Type', 'application/json');
    }
}