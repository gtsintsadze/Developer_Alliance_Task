<?php

class Validation
{
    public function isEmpty($data): bool
    {
        if ($data === "") {
            return false;
        }
        return true;
    }

    public function isValidEmail($email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function emailExists($email): bool
    {
        $validate_mail = new Database();
        $stmt = $validate_mail->readUsers();

        foreach ($stmt as $item) {
            if ($item["email"] === $email) {
                return true;
            }
        }
        return false;
    }
}
