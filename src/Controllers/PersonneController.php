<?php

namespace AuxiDv\EcaApi\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PersonneController {

    public function search(Request $request, Response $response): Response {
        $params = $request->getQueryParams();
        // your logic here
        $data = ['items' => []];
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function getById(Request $request, Response $response, array $args): Response {
        $id = $args['id'];
        // your logic here
        $data = ['id' => $id];
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}