<?php 

require("Database.php");
$config = require("config.php");

$db = new Database("mysql", $config["database"]);

$query = "SELECT * FROM `notes` WHERE `user_id` = 1 ORDER BY `created_on` DESC";
$result = $db->query($query)->get();

$heading = "Notes";

require("views/notes.view.php");
