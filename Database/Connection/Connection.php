<?php

class Connection
{
    private static $instance;

    public static function connection()
    {
        if (!self::$instance)
        {
            self::$instance = new PDO('');
        }

        return self::$instance;
    }
}
