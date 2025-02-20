<?php

use Core\App;
use Core\Database;
use Core\Session;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUser = $_SESSION['user']['id'];

$result = $db->query("SELECT * FROM `users` WHERE `id` = :id", [
    ":id" => $currentUser
])->findOrAbort();



if (Validator::string($_POST['note'], 1, 2500)) {

    $db->query("INSERT INTO `notes` (`note`, `user_id`) VALUES (:note, :user_id)", [
        ':note' => $_POST['note'],
        ':user_id' => $currentUser
    ]);

    redirect("/notes");
}

Session::flash("errors", ['message' => "A Note Cannot Be Empty Or More Than 2500 Character"]);
Session::flash("temp", ['note' => $_POST['note']]);

redirect("notes/create");
