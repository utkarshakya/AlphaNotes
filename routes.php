<?php 

$router->get("/", "controllers/home.php");
$router->get("/about", "controllers/about.php");

$router->get("/notes", "controllers/notes/index.php")->only("auth");
$router->get("/note", "controllers/notes/show.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->post("/notes", "controllers/notes/store.php");
$router->patch("/notes", "controllers/notes/update.php");
$router->delete("/notes", "controllers/notes/destroy.php");

$router->get("/register", "controllers/register/create.php")->only("guest");
$router->post("/register", "controllers/register/store.php")->only("guest");

$router->get("/session", "controllers/session/create.php")->only("guest");
$router->post("/session", "controllers/session/store.php")->only("guest");
$router->delete("/session", "controllers/session/destroy.php")->only("auth");

