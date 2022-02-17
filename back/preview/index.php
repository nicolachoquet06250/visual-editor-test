<?php
require __DIR__ . '/../functions.php';

cors();
?>
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
    </head>

    <body>
        <?php $component = json_decode(file_get_contents('php://input'), true); ?>
        
        <?php if (empty($component)): ?>
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Orange_logo.svg/1022px-Orange_logo.svg.png" style="width: 30px; margin-right: 10px; margin-left: 10px;" />
                    <span class="fs-4">header</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>
        <?php endif; ?>

        <main role="main" id="ve-components" class="container">
            <?= Draw::{empty($component) ? 'void' : $component['_name']}($component) ?>
        </main>
                
        <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js"></script>
    </body>
</html>