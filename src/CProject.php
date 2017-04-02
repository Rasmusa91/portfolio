<?php
    class CProject
    {
        private $name;
        private $description;
        private $images;
        private $tags;

        public function __construct($name, $description, $images, $tags)
        {
            $this->name = $name;
            $this->description = $description;
            $this->images = $images;
            $this->tags = $tags;
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

        public function getTags() {
            return $this->tags;
        }
    }
