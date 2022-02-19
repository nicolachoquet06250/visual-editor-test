<?php

namespace ve\helpers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HttpCors {
    public static $mapHttpMethods = ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'];
    public static $optionRoute = '/{routes:.+}';

    public static function options(Request $request, Response $response, $args): Response {
        return $response;
    }

    public static function middleware($request, $handler): Response {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        $host = getallheaders()['Origin'] ?? $protocol . $domainName;
        
        return $handler->handle($request)
                ->withHeader('Access-Control-Allow-Origin', $host)
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }

    /**
     * @throws HttpNotFoundException
     */
    public static function map($request, $response) {
        throw new HttpNotFoundException($request);
    }
}