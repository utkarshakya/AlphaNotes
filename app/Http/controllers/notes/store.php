<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUser = 1;

$result = $db->query("SELECT * FROM `users` WHERE `id` = :id", [
    ":id" => $currentUser
])->findOrAbort();

$error = [];

if (!(Validator::string($_POST['note'], 1, 2500))) {
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
