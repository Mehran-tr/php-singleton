<?php

/*
 * The Singleton Pattern ensures a Class has only one instance , and provides a global point of access to it
 * */
class Database
{
    public static $connection;

    private function __construct()
    {
        echo "Connection successful";
    }

    public static function connect()
    {
        if (!isset(self::$connection)) {
            self::$connection = new Database();
        }
        return self::$connection;
    }
}

$DB = Database::connect();