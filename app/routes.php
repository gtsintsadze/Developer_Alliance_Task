<?php

require_once __DIR__."./core/Database.php";

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

$users = new Database();

switch ($page) {
    case @"/":
        require_once "templates/index.php";
        break;
    case @"/sign-up":
        require_once "templates/add_users.php";
        if ($requestMethod === "POST") {
            $name = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $users->createUser($name,$lname,$email);
            echo "User Added";
        }
        break;
    case @"/records":
        $stmt = $users->readUsers();
        require_once "templates/records.php";
        break;
    case @"/delete":
        if ($requestMethod === "POST") {
            $id = $_POST['ID'];
            $users->deleteUser($id);
        }
        break;
}