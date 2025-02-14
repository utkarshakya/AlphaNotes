<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container;

$container->bind("Core\\Database", function () {

    $config = require basePath("config.php");
    return new Database("mysql", $config["database"]);

});

App::setContainer($container);
