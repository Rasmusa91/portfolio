<?php
	class CDispatcher implements IInjectable
	{
		use TInjectable;

        private $controller;

        public function __construct() {

        }

        public function setController($controllerName) {
            $this->controller = $this->di->get($controllerName);
        }

        public function dispatch() {
            if ($this->controller !== null) {
                $this->controller->load();
            }
        }
    }
