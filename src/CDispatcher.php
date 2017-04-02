<?php
	class CDispatcher implements IInjectable
	{
		use TInjectable;

        private $controller;
		private $controllerLoadOptions;

        public function __construct() {

        }

        public function setController($controllerName, $controllerLoadOptions = []) {
            $this->controller = $this->di->get($controllerName);
			$this->controllerLoadOptions = $controllerLoadOptions;
        }

        public function dispatch() {
            if ($this->controller !== null) {
                $this->controller->load($this->controllerLoadOptions);
            }
        }
    }
