<?php

use Core\Database;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$currentUser = 1;

$result = $db->query("SELECT `user_id` FROM `notes` WHERE `id` = :id", [
    ":id" => $_POST['id']
])->findOrAbort();

authorize($result['user_id'] === $currentUser);

$db->query("DELETE FROM `notes` WHERE `id` = :id", [
    ':id' => $_POST['id']
]);

header("Location: /notes");
exit();