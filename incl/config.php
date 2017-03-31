<?php
    /**
    * Error handling
    *
    */
    error_reporting(-1);
    ini_set("display_error", 1);
    ini_set("output_buffering", 0);


    /**
    * Paths
    *
    */
    define("SERVER_PATH", getServerPath("/portfolio"));
    define("ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR  . ".." . DIRECTORY_SEPARATOR );


    /**
    * Config vars
    *
    */
    $config = [];
    $config["title"] = "Rasmus Appelqvist";


    /**
    * URL parts
    *
    */
    $config["URL"] = getURLParts (2);
    $config["URL"]["mainPage"] = (isset($config["URL"][0]) ? $config["URL"][0] : "home");
    $config["URL"]["subPage"] = (isset($config["URL"][1]) ? $config["URL"][1] : null);
    $config["URL"]["subSubPage"] = (isset($config["URL"][2]) ? $config["URL"][2] : null);


    /**
	* Database
	*
	*/
	$config["database"] = include("db_config.php");


    /**
    * CSS
    *
    */
    $config["CSS"] = [];
    $config["CSS"][] = SERVER_PATH . "css/bootstrap.min.css";
    $config["CSS"][] = SERVER_PATH . "css/style.css";


    /**
    * JS
    *
    */
    $config["JS"] = [];
    $config["JS"][] = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js";
    $config["JS"][] = SERVER_PATH . "js/bootstrap.min.js";


    /**
    * Page
    *
    */
    $config["page"] = $config["URL"]["mainPage"];

    if(!file_exists('views/' . $config["page"] . '.tpl.php')) {
        $config["page"] = "error";
    }


    /**
    * Navbar
    *
    */
    $config["navbar"] = ["home", "projects", "about", "contact"];

?>
