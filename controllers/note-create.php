<?php

require("Database.php");
$config = require("config.php");
$db = new Database("mysql", $config["database"]);

$message = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (strlen(trim($_POST['note'])) === 0) {
        $message['error'] = "Empty Note Can Not Be Submitted";
    }

    if (strlen($_POST['note']) > 600) {
        $message['error'] = "Note Can Be More Than 600 Words";
    }

    if (empty($message)) {
        $query = "INSERT INTO notes (note, user_id) VALUES (:note, :user_id)";
        $result = $db->query($query, [
            ':note' => $_POST['note'],
            ':user_id' => 1
        ]);
        $message['success'] = "Your Note Is Saved Successfully";
    }
}

$heading = "Create Note";

// authorize($result['user_id'] === 1);

require("views/note-create.view.php");
