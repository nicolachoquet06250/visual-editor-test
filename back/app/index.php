<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Exception\HttpNotFoundException;
    use Slim\Factory\AppFactory;
    use ve\controllers\VeController;
    use ve\helpers\HttpCors;

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create();

    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    $app->addRoutingMiddleware();

    $app->addErrorMiddleware(true, true, true);

    $app->options(HttpCors::$optionRoute, [HttpCors::class, 'option']);
    
    $app->add([HttpCors::class, 'middleware']);
    

    $app->get('/', [VeController::class, 'index']);
    $app->post('/save/', [VeController::class, 'save']);
    $app->get('/current/', [VeController::class, 'current']);
    $app->post('/preview/', [VeController::class, 'preview']);
    $app->post('/preview', [VeController::class, 'preview']);

    /**
     * Catch-all route to serve a 404 Not Found page if none of the routes match
     * NOTE: make sure this route is defined last
     */
    $app->map(
        HttpCors::$mapHttpMethods, 
        HttpCors::$optionRoute, 
        [HttpCors::class, 'map']
    );

    $app->run();
