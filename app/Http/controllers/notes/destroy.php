<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$noteId = $_POST['id'];

$result = $db->query("SELECT `user_id` FROM `notes` WHERE `id` = :id", [
    ":id" => $noteId
])->findOrAbort();

authorize($result['user_id'] === $_SESSION['user']['id']);

$db->query("DELETE FROM `notes` WHERE `id` = :id", [
    ':id' => $noteId
]);

redirect("/notes");
