<?php
require __DIR__ . '/../functions.php';

cors();
?>

<?php $component = json_decode(file_get_contents('php://input'), true); ?>

<?php
    $global_style = Draw::global_style();
    echo empty($component) ? <<<HTML
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

                {$global_style}
            </head>

            <body>
    HTML : '';
?>

<main role="main" id="ve-components">
    <?= !empty($component) && !(strpos($component['_name'], 'nav-bar') || strpos($component['_name'], 'navbar') || strpos($component['_name'], 'header')) ? '<div class="container">' : '' ?>
        <?= Draw::{empty($component) ? 'void' : str_replace('-', '_', $component['_name'])}($component) ?>
    <?= !empty($component) && !(strpos($component['_name'], 'nav-bar') || strpos($component['_name'], 'navbar') || strpos($component['_name'], 'header')) ? '</div>' : '' ?>
</main>
                
<?php 
    echo empty($component) ? <<<HTML
            <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js"></script>
            </body>
        </html>
    HTML : '';
?>