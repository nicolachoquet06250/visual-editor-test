<?php

namespace ve\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController
{
    // post
    public static function check_password(Request $request, Response $response): Response {
        $encodedPassword = json_decode(file_get_contents(__DIR__ . '/../../../env.json'), true)['PASSWORD'];
        $body = $request->getParsedBody();
        $receivedPassword = $body['password'];

        $ok = sha1($receivedPassword) === $encodedPassword;

        $response->getBody()->write(json_encode([
            'ok' => $ok
        ]));
        return $response->withHeader('Content-Type', 'application/json');
    }
}