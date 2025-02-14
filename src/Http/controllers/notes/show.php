<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT * FROM `notes` WHERE `id` = :id";
$result = $db->query($query, [":id" => $_GET['id']])->findOrAbort();

authorize($result['user_id'] === 1);

view("notes/show.view.php", ["heading" => "Note", "result" => $result]);
