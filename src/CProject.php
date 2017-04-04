<?php
    class CProject
    {
        private $name;
        private $description;
        private $images;
        private $tags;
        private $sourceControl;
        private $repository;

        public function __construct($name, $description, $images, $tags, $sourceControl, $repository)
        {
            $this->name = $name;
            $this->description = $description;
            $this->images = $images;
            $this->tags = $tags;
            $this->sourceControl = $sourceControl;
            $this->repository = $repository;
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

        public function getSourceControl() {
            return $this->sourceControl;
        }

        public function getRepository() {
            return $this->repository;
        }
    }
