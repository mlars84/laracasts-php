<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div>
  <h3>PHP here:</h3>
</div>
<?php

  $name = 'Matt Larson';
  $greeting = 'hello world!';

  echo $greeting . ' ' . $name;
  
  echo "Hello, $name";
?>
 
<h3>Car object:</h3>
 
<?php
  class Car {
    function Car() {
        $this->model = "VW";
    }
  }

  // create an object
  $herbie = new Car();

  // show object properties
  echo $herbie->model;
?>
<h2>Constant:</h2>
<?php
  //php constant variable:
  define(number, 6);

  echo number;
?>
</body>
</html>