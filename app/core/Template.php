<?php

class Template
{
    const TEMPLATE_DIR = BASE_DIR .'app';

    public function render(string $filename, array $data = null): void
    {
        ob_start();
        extract($data);
        require_once self::TEMPLATE_DIR.$filename;
        echo ob_get_clean();
    }
}