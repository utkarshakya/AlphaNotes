<?php

use Core\Database;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$query = "SELECT * FROM `notes` WHERE `user_id` = 1 ORDER BY `created_on` DESC";
$result = $db->query($query)->get();

view("notes/index.view.php", ["heading" => "Notes", "result" => $result]);
