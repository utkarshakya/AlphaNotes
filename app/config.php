<?php

return [
    "DB_Cloud" => [

        "host" => getenv("DB_HOST"),
        "port" => getenv("DB_PORT"),
        "dbname" => getenv("DB_NAME"),
        "charset" => "utf8mb4"

    ],

    "DB_Local" => [

        "host" => "localhost",
        "port" => "3306",
        "dbname" => '',
        "charset" => "utf8mb4"
        
    ]
];
