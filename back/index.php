<?php require __DIR__ . '/functions.php' ?>

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
              
        <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js"></script>

        <?= Draw::global_style() ?>
    </head>
    <body>
        <?php
            $components = json_decode(file_get_contents(__DIR__ . '/page_last_version.json'), true);
            
            echo array_reduce($components, function($r, $component) {
                ['_name' => $name] = $component;

                if (empty($component)) {
                    return $r . Draw::void();
                } else if (strpos($name, 'nav-bar') || strpos($name, 'navbar') || strpos($name, 'header')) {
                    return $r . Draw::{str_replace('-', '_', $name)}($component);
                }
                return $r . 
                    '<div id="ve-components" class="container">' . 
                        Draw::{empty($component) ? 'void' : str_replace('-', '_', $name)}($component) . 
                    '</div>';
            }, '');
        ?>
    </body>
</html>
