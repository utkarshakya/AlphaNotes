<?php 

$router->get("/", "controllers/home.php");
$router->get("/about", "controllers/about.php");

$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->delete("/notes/destroy", "controllers/notes/destroy.php");