<?php


namespace Bpgaming\controller;

use Slim\Http\Request;
use Slim\Http\Response;

class Home extends BaseController {
    public function index(Request $request, Response $response, array $args) {
        return $this->container['renderer']->render($response, 'home/index.phtml', $args);
    }
}