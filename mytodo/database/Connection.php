<?php

class Connection
{
    public static function make($config)
    {

        try {
            //sample PDO string new PDO('DBType:host=YOUR_HOST_HERE;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            //getMessage() returns the exception message. Can also write in custom string.
            die($e->getMessage());
        }
    }
}

//calling a static method with Scope Resolution Operator, is a token that allows 
//access to static, constant, and overridden properties or methods of a class.
// $pdo = Connection::make();