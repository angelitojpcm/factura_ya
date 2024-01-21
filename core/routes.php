<?php
class Route {
    private $routes = [];

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function initRoutes() {
        $routes['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $routes['login'] = array('route' => '/login', 'controller' => 'login', 'action' => 'index');
        $routes['facturacion'] = array('route' => '/facturacion', 'controller' => 'facturacion', 'action' => 'index');
        $this->setRoutes($routes);
    }

    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    protected function run($url) {
        array_walk($this->routes, function($route) use($url) {
            if($url == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}