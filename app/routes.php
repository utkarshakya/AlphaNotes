<?php 

$router->get("/", "home.php");
$router->get("/about", "about.php");
$router->get("/contribute", "contribute.php");

$router->get("/notes", "notes/index.php")->only("auth");
$router->get("/note", "notes/show.php")->only("auth");
$router->get("/notes/create", "notes/create.php")->only("auth");
$router->post("/notes", "notes/store.php")->only("auth");
$router->patch("/notes", "notes/update.php")->only("auth");
$router->delete("/notes", "notes/destroy.php")->only("auth");

$router->get("/register", "register/create.php")->only("guest");
$router->post("/register", "register/store.php")->only("guest");

$router->get("/session", "session/create.php")->only("guest");
$router->post("/session", "session/store.php")->only("guest");
$router->delete("/session", "session/destroy.php")->only("auth");

