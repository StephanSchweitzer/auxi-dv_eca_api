<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

/** @var App $app */
$app->get('/api/v1/health', function (Request $request, Response $response) {
    $response->getBody()->write(json_encode(['status' => 'OK', 'timestamp' => date('c')]));
    return $response->withHeader('Content-Type', 'application/json');
});