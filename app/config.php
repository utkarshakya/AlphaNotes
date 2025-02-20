<?php

return [
    "DB_Cloud" => [

        "host" => $_ENV["DB_HOST"],
        "port" => $_ENV["DB_PORT"],
        "dbname" => $_ENV["DB_NAME"],
        "charset" => "utf8mb4"

    ],

    "DB_Local" => [

        "host" => "localhost",
        "port" => "3306",
        "dbname" => '',
        "charset" => "utf8mb4"
        
    ]
];
