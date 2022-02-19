<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Exception\HttpNotFoundException;
    use Slim\Factory\AppFactory;
    use ve\controllers\VeController;

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create();

    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    $app->addRoutingMiddleware();

    $app->addErrorMiddleware(true, true, true);

    /**
     * START ENABLE CORS
     */
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
    // instead of mapping:
    $app->options('/(:x+)', function() use ($app) {
        //...return correct headers...
        $app->response->setStatus(200);
    });
    /**
     * STOP ENABLE CORS
     */

    $app->get('/', [VeController::class, 'index']);
    $app->post('/save/', [VeController::class, 'save']);
    $app->get('/current/', [VeController::class, 'current']);
    $app->post('/preview/', [VeController::class, 'preview']);
    $app->post('/preview', [VeController::class, 'preview']);

    $app->run();
