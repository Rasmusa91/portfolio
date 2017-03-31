<?php
    trait TInjectable
    {
        protected $di;

        public function setDI($di)
        {
            $this->di = $di;
        }
    }
