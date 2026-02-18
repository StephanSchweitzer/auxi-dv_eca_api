<?php

use AuxiDv\EcaApi\Controllers\PersonneController;
use AuxiDv\EcaApi\Controllers\VenteController;use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

/** @var App $app */

$app->get('/api/v1/health', function (Request $request, Response $response) {
    $response->getBody()->write(json_encode(['status' => 'OK', 'timestamp' => date('c')]));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/api/v1/personnes', [PersonneController::class, 'search']);
$app->get('/api/v1/personnes/{id}', [PersonneController::class, 'getById']);

$app->get('/api/v1/ventes', [VenteController::class, 'search']);
$app->get('/api/v1/ventes/{id}', [VenteController::class, 'getById']);
$app->get('/api/v1/personnes/{id}/ventes', [VenteController::class, 'getByPerson']);