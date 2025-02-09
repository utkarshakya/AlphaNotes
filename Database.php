<?php

class Database
{
    public $connection;

    public function __construct(string $dbType, array $config, string $username = "root", string $password = "")
    {
        $data = http_build_query($config, "", ";"); // this will make a string out of a associative array.
        $query = "$dbType:" . "$data"; // here we get the full dsn query

        $this->connection = new PDO($query, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC], if you wounding what is this its simple we just
        // change the default fetch mode to a fetch_assoc. that's it. So now we don't need to explicitly mention every time when I fetch the result.
    }

    public function query(string $query, array $params = null)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params); // we that this params to pass a bound parameters
        return $statement;
    }
}
