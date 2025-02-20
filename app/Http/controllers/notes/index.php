<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$result = $db->query("SELECT * FROM `notes` WHERE `user_id` = :user_id ORDER BY `updated_at` DESC", [
    ':user_id' => $_SESSION['user']['id']
])->get();

view("notes/index.view.php", ["result" => $result]);
