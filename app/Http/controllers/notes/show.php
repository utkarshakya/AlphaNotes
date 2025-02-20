<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$result = $db->query("SELECT * FROM `notes` WHERE `id` = :id", [
    ":id" => $_GET['id'] ?? -1
])->findOrAbort();

authorize($result['user_id'] === $_SESSION['user']['id']);

Session::flash('result', $result);

view("notes/show.view.php");
