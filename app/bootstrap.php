<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container;

$container->bind("Core\\Database", function () {

    $config = require baseAppPath("config.php");
    return new Database("mysql", $config["DB_Cloud"], $_ENV["DB_USER"], $_ENV["DB_PASS"]);

});

App::setContainer($container);
