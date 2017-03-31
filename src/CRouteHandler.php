<?php
    class CRouteHandler implements IInjectable
	{
		use TInjectable;

        private $routes;

        public function __construct()
        {
            $this->routes = [];
        }

        public function add($name, $action) {
            $this->routes[$name] = $action;
        }

        public function handle($page) {
            foreach($this->routes as $key => $value) {
                if ($page === $key) {
                    $value();
                }
            }
        }
    }
