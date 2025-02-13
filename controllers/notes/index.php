<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT * FROM `notes` WHERE `user_id` = 1 ORDER BY `created_on` DESC";
$result = $db->query($query)->get();

view("notes/index.view.php", ["heading" => "Notes", "result" => $result]);
