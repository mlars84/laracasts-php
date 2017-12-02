<?php

//selectAll('NAME_OF_TABLE') and map them into instances of 'Task'($intoClass in QueryBuilder.php)
$tasks = $query->selectAll('todos');

// die(var_dump($tasks));

require('views/index.view.php');