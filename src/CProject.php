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

        public getName() {
            return $this->name;
        }

        public getDescription() {
            return $this->description;
        }

        public getImages() {
            return $this->images;
        }
    }
