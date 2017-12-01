<?php

class Task {

    public $description;

    public $completed = false;

    public function __construct($description)
    {
        //Automatically triggerd on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        return $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

//any args passed here can be excepted in constructor method in class (__construct())
// $task = new Task('Make a commit'); - new individual task object is instantiated

//setp array of task 

$tasks = [
    new Task('Go to the store'),
    new Task('Finish report migration'),
    new Task('Eat some yummy food'),
    new Task('Chillax this weekend'),
    new Task('Get cat litter'),
    new Task('Don\'t dump the entire database'),
    new Task('Don\'t delete any repos')
];

$tasks[0]->complete();

// die(print_r($stasks));

try {
    //sample PDO string new PDO('DBType:host=YOUR_HOST_HERE;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'password' );
} catch (PDOException $e) {
    //getMessage() returns the exception message. Can also write in custom string.
    die($e->getMessage());
}

//Prepare SQL Query
$statement = $pdo->prepare('SELECT * FROM todos');

//Execute Query
$statement->execute();

//fetch DB rows as object
$rows = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->description);

require('index.view.php');

