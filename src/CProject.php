<?php
    class CProject
    {
        private $name;
        private $description;
        private $images;

        public function __construct($name, $description, $images)
        {
            $this->name = $name;
            $this->description = $description;
            $this->images = $images;
        }

        public function getName() {
            return $this->name;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getImages() {
            return $this->images;
        }
    }
