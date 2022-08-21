<?php

class Validation
{
    public function isEmpty($data): bool
    {
        if ($data !== "") {
            return true;
        }
        return false;
    }
}