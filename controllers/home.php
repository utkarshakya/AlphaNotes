<?php

$_SESSION['name'] = "King";
$_SESSION['sex'] = "Non-Binary";

view(
    "home.view.php",
    ["heading" => "Home"]
);
