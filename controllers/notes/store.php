<?php

use Core\Database;
use Core\Validator;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$message = [];

if (!(Validator::validNote($_POST['note'], 1, 1000))) {
    $message['error'] = "A Note Can Not Be Empty Or More Than 1000 Character";
}

if (!empty($message)) {
    return (
        view("notes/create.view.php", [
            "heading" => "Create Note",
            "message" => $message
        ])
    );
}

$db->query("INSERT INTO `notes` (`note`, `user_id`) VALUES (:note, :user_id)", [
    ':note' => $_POST['note'],
    ':user_id' => 1
]);
$message['success'] = "Your Note Has Been Saved Successfully";

header("Location: /notes");
die();
