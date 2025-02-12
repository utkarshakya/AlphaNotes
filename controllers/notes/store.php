<?php

use Core\Database;
use Core\Validator;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$currentUser = 1;
$result = $db->query("SELECT * FROM `notes` WHERE `id` = :id", [":id" => $_POST['id']]);
authorize($result['user_id'] === $currentUser);

$error = [];

if (!(Validator::validNote($_POST['note'], 1, 1000))) {
    $error['message'] = "A Note Can Not Be More Than 1000 Character";
}

if (!empty($error)) {
    return (
        view("notes/create.view.php", [
            "heading" => "Create Note",
            "error" => $error
        ])
    );
}

$db->query("INSERT INTO `notes` (`note`, `user_id`) VALUES (:note, :user_id)", [
    ':note' => $_POST['note'],
    ':user_id' => 1
]);

header("Location: /notes");
die();
