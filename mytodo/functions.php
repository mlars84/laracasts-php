<?php

function connectToDb()
{
    try {
        //sample PDO string new PDO('DBType:host=YOUR_HOST_HERE;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'password' );
    } catch (PDOException $e) {
        //getMessage() returns the exception message. Can also write in custom string.
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    //Prepare SQL Query
    $statement = $pdo->prepare('SELECT * FROM todos');

    //Execute Query
    $statement->execute();

    //fetch DB rows as object
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}