<?php

require("Database.php");
$config = require("config.php");
$db = new Database("mysql", $config["database"]);

$query = "select * from notes where id = :id";
$result = $db->query($query, [":id" => $_GET['id']])->findOrAbort();

$heading = "Note";

authorize($result['user_id'] === 1);

require("views/note.view.php");
