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

    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
        $app->options('/{routes:.+}', function ($request, $response, $args) {
            return $response;
        });
        
        $app->add(function ($request, $handler) {
            $response = $handler->handle($request);
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $domainName = $_SERVER['HTTP_HOST'];
            $host = getallheaders()['Origin'] ?? ($protocol . $domainName);
            
            return $response
                    ->withHeader('Access-Control-Allow-Origin', $host)
                    ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
        });
    } else {
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
    }
    

    $app->get('/', [VeController::class, 'index']);
    $app->get('/styles', [VeController::class, 'styles']);
    $app->post('/save/', [VeController::class, 'save']);
    $app->get('/current/', [VeController::class, 'current']);
    $app->post('/preview/', [VeController::class, 'preview']);
    $app->post('/preview', [VeController::class, 'preview']);

    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
        /**
         * Catch-all route to serve a 404 Not Found page if none of the routes match
         * NOTE: make sure this route is defined last
         */
        $app->map(
            ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], 
            '/{routes:.+}', 
            function ($request, $response) {
                throw new HttpNotFoundException($request);
            }
        );
    }

    $app->run();
