<?php


require("Database.php");
$config = require("config.php");
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

$heading = "Create Note";

// authorize($result['user_id'] === 1);

require("views/notes/create.view.php");
