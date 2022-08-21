<?php

class Database
{
    private PDO $PDO;

    public function __construct()
    {
        $databaseCredentials = [
            'database' => "users",
            'username' => 'root',
            'password' => '',
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

    public function createUser($name, $lname, $email)
    {
        $sql = "INSERT INTO users (first_name, last_name, email) VALUES (?,?,?)";
        $this->PDO->prepare($sql)->execute([$name,$lname,$email]);
    }

    public function readUsers()
    {
        return $this->PDO->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE ID=$id";
        $this->PDO->prepare($sql)->execute();
    }
}