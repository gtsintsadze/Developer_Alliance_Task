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
}
