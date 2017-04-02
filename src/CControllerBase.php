<?php
	abstract class CControllerBase implements IInjectable
	{
		use TInjectable;

        public abstract function load($options = []);
    }
