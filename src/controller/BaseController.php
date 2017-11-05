<?php


namespace Bpgaming\controller;


class BaseController {

    /**
     * @var \Slim\Container
     */
    public $container;
    public $request;
    public $response;
    public $data = [];

    public function __construct($container) {
        $this->container = $container;
    }

    public function viewResult($viewName = '') {
        return $this->container['renderer']->render($this->response, 'index.phtml', $this->data);
    }
}