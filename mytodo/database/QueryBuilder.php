<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        //Prepare SQL Query
        $statement = $this->pdo->prepare('SELECT * FROM {$table}');
    
        //Execute Query
        $statement->execute();
    
        //fetch DB rows as object
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}

//Contractor example
// class Contractor
// {
//     protected $electrician;

//     protected $plumber;

//     protected $designer;

//     //declare dependencies
//     public function __contruct($electrician, $plumber, $designer)
//     {
//         $this->electrician = $electrician;
//         $this->plumber = $plumber;
//         $this->designer = $designer;
//     }

//     public function doSomeWork() 
//     {
//         //electrician
//         //plumber
//         //designer
//     }
// }lass Contractor
// {
//     protected $electrician;

//     protected $plumber;

//     protected $designer;

//     //declare dependencies
//     public function __contruct($electrician, $plumber, $designer)
//     {
//         $this->electrician = $electrician;
//         $this->plumber = $plumber;
//         $this->designer = $designer;
//     }

//     public function doSomeWork() 
//     {
//         //electrician
//         //plumber
//         //designer
//     }
// }