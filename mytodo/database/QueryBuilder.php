<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll()
    {
        //Prepare SQL Query
        $statement = $this->pdo->prepare('SELECT * FROM {$table}');
    
        //Execute Query
        $statement->execute();
    
        //fetch DB rows as object
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}