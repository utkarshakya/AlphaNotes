<?php

use Core\Database;

$config = require basePath("config.php");
$db = new Database("mysql", $config["database"]);

$query = "SELECT * FROM `notes` WHERE `id` = :id";
$result = $db->query($query, [":id" => $_GET['id']])->findOrAbort();

authorize($result['user_id'] === 1);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    authorize($result['user_id'] === 1);
    
    $query = "DELETE FROM `notes` WHERE `id` = {$_POST['delete']}";

    $result = $db->query($query);

    header("Location: /notes");
    exit();
}else{
      
    view("notes/show.view.php", ["heading" => "Note", "result" => $result]);
    
}