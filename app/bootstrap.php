<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container;

$container->bind("Core\\Database", function () {

    $config = require baseAppPath("config.php");
    return new Database("mysql", $config["DB_Cloud"], getenv("DB_USER"), getenv("DB_PASS"));

});

App::setContainer($container);
