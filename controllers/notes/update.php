<?php

use Core\Database;
use Core\Validator;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$result = $db->query("SELECT * FROM `notes` WHERE `id` = :id", [
    ":id" => $_POST['id']
])->findOrAbort();

$currentUser = 1;

authorize($result['user_id'] === $currentUser);

$error = [];

if (!(Validator::validNote($_POST['note'], 1, 2500))) {
    $error['message'] = "A Note Can Not Be More Than 2500 Character";
}

if (!empty($error)) {
    return (
        view("notes/show.view.php", [
            "heading" => "Note",
            "error" => $error,
            "result" => $result 
        ])
    );
}

$db->query("UPDATE `notes` SET `note` = :note WHERE `id` = :id", [
    ':note' => $_POST['note'],
    ':id' => $_POST['id']
]);

header("Location: /notes");
die();
