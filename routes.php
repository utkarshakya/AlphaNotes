<?php 

$router->get("/", "controllers/home.php");
$router->get("/about", "controllers/about.php");

$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->post("/notes", "controllers/notes/store.php");
$router->patch("/notes", "controllers/notes/update.php");
$router->delete("/notes", "controllers/notes/destroy.php");

$router->get("/register", "controllers/auth/register.php");
$router->post("/register", "controllers/auth/store.php");