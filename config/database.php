<?php

class database
{
    private static $data = null;
    private function __construct() {
    }
    public static function getData() {
        if(is_null(self::$data)) {
            self::$data = new PDO("mysql:host=localhost;dbname=agrovir_homework", 'root', '06pv24');
        }
        return self::$data;
    }
}