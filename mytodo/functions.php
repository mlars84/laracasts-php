<?php

function fetchAllTasks($pdo)
{
    //Prepare SQL Query
    $statement = $pdo->prepare('SELECT * FROM todos');

    //Execute Query
    $statement->execute();

    //fetch DB rows as object
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}