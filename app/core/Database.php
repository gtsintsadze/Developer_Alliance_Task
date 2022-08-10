<?php

class Database
{
    private PDO $PDO;

    public function __construct()
    {
        $databaseCredentials = [
            'database' => "users",
            'username' => 'root',
            'password' => 'root',
            'servername' => 'localhost'
        ];
        $database = $databaseCredentials['database'];
        $servername = $databaseCredentials['servername'];
        $username = $databaseCredentials['username'];
        $password = $databaseCredentials['password'];

        $dsn = "mysql:dbname=$database;host=$servername:3306";

        $this->PDO = new PDO($dsn, $username, $password);
        $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getPDO(): PDO
    {
        return $this->PDO;
    }

    public function prepare($sql)
    {
        $pdo = $this->getPDO();
        return $this->prepare($sql);
    }
}