<?php

$template = new Template();

require_once __DIR__ . "./core/Database.php";

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

$users = new Database();

switch ($page) {
    case @"/":
        $template->render("index.php");
        break;
    case @"/sign-up":

        if ($requestMethod === "POST") {
            $validation = new Validation();
            $errors = [];

            $name = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];

            if ($validation->isEmpty($name) === false) {
                $errors["name"] = "name is empty";

            }

            if ($validation->isEmpty($lname) === false) {
                $errors["lname"] = "lname is empty";
            }

            if ($validation->isEmpty($email) === false) {
                $errors["email"] = "email is empty";
            }

            if (empty($errors)) {
                $users->createUser($name, $lname, $email);
                $success = "User Successfully Added";
                $template->render("add_users.php", ["success" => $success]);
            } else {
                $template->render("add_users.php", ["errors"=> $errors]);
            }

        } else {
            $template->render("add_users.php", ["errors"=> [] ]);
        }
        break;
    case @"/records":
        $stmt = $users->readUsers();
        $template->render("records.php", ["stmt"=> $stmt]);
        break;
    case @"/delete":
        if ($requestMethod === "POST") {
            $id = $_POST['ID'];
            $users->deleteUser($id);
        }
        break;
}