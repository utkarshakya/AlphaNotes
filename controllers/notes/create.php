<?php


$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$message = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!(Validator::validNote($_POST['note'], 1, 1000))) {
        $message['error'] = "A Note Can Not Be Empty Or More Than 1000 Character";
    }

    if (empty($message)) {
        $query = "INSERT INTO `notes` (`note`, `user_id`) VALUES (:note, :user_id)";
        $result = $db->query($query, [
            ':note' => $_POST['note'],
            ':user_id' => 1
        ]);
        $message['success'] = "Your Note Has Been Saved Successfully";
    }
}

view("notes/create.view.php", ["message" => $message, "heading" => "Create Note"]);

