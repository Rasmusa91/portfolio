<?php
    class CDI
    {
        public $services = [];

        public function set($name, $loader) {
            $this->services[$name] = $loader();
        }

        public function get($name) {
            return $this->services[$name];
        }

        public function __get($name)
        {
            return $this->get($name);
        }
    }
?>
