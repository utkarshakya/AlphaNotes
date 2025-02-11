<?php

use Core\Database;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$query = "DELETE FROM `notes` WHERE `id` = :id";

$result = $db->query($query, [
    ':id' => $_POST['id']
]);

header("Location: /notes");
exit();