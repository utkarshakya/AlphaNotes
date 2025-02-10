<?php 

require("Database.php");
$config = require("config.php");

$db = new Database("mysql", $config["database"]);

$query = "select * from notes where user_id = 1";
$result = $db->query($query)->get();

$heading = "Notes";

require("views/notes.view.php");
