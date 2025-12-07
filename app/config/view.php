<?php

namespace App\Config;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);

        $file = __DIR__ . "/../Views/" . $view . ".php";

        if (file_exists($file)) {
            include $file;
        } else {
            echo "View '$view' tidak ditemukan!";
        }
    }
}
