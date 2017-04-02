<?php
    class CProject
    {
        private $name;
        private $description;
        private $images;
        private $featured_image;
        private $tags;

        public function __construct($name, $description, $images, $featured_image, $tags)
        {
            $this->name = $name;
            $this->description = $description;
            $this->images = $images;
            $this->featured_image = $featured_image;
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

        public function getFeaturedImage() {
            return $this->featured_image;
        }

        public function getTags() {
            return $this->tags;
        }
    }
