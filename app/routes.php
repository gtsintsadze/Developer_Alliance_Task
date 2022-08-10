<?php

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($page) {
    case @"/":
        require_once "templates/add_users.php";
        break;
    case "/delete":
        require_once "templates/delete-users.php";
        break;
}