<?php

class Connection
{
    public static function make()
    {
        try {
            //sample PDO string new PDO('DBType:host=YOUR_HOST_HERE;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'password' );
        } catch (PDOException $e) {
            //getMessage() returns the exception message. Can also write in custom string.
            die($e->getMessage());
        }
    }
}

//calling a static method with Scope Resolution Operator, is a token that allows 
//access to static, constant, and overridden properties or methods of a class.
$pdo = Connection::make();