<?php

use Core\App;
use Core\Database;
use Core\Session;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUser = $_SESSION['user']['id'];

$noteId = $_POST['id'];
$noteBody = $_POST['note'];

$result = $db->query("SELECT * FROM `notes` WHERE `id` = :id", [
    ":id" => $noteId
])->findOrAbort();

authorize($result['user_id'] === $currentUser);

if (Validator::string($noteBody, 1, 2500)) {
    $db->query("UPDATE `notes` SET `note` = :note WHERE `id` = :id", [
        ':note' => $noteBody,
        ':id' => $noteId
    ]);

    redirect("/notes");
}

Session::flash("errors", [
    "message" => "A Cannot Be Empty Or More Than 2500 Character"
]);

redirect("/note?id=$noteId");
