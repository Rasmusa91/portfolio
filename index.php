<?php
    include(__DIR__ . '/incl/functions.php');
    include(__DIR__ . '/incl/config.php');

    $di = new CDI();

    $di->set('routes', function() use($di) {
        $routes = new CRouteHandler();
        $routes->setDI($di);
        return $routes;
    });

    $di->set('dispatcher', function() use($di) {
        $dispatcher = new CDispatcher();
        $dispatcher->setDI($di);
        return $dispatcher;
    });

    $di->set('db', function() use($config, $di) {
        $db = new CDatabaseHandler($config["database"]);
        $db->setDI($di);
        return $db;
    });

    $di->set('projects', function() use($di) {
        $projects = new CProjectController();
        $projects->setDI($di);
        return $projects;
    });

    $di->routes->add('home', function() use($di) {
        $di->dispatcher->setController('projects');
    });

    $di->routes->add('projects', function() use($di) {
        $di->dispatcher->setController('projects');
    });

    $di->routes->handle($config['page']);
    $di->dispatcher->dispatch();

    include(__DIR__ . '/theme/index.tpl.php');
?>
