<div>
  <h3>PHP here:</h3>
</div>
<?php

  $matt = 'Matt Larson';
  $greeting = 'hello world!';

  echo $greeting . ' ' . $matt;
  
  echo "Hello, $matt";
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
<hr>
<?php
  //while loop
  $x = 10; 
  
  while($x <= 20) {
    echo "The number is: $x <br>";
    $x++;
  }

  echo "<h3>For Loop:</h3>";

  //for
  for($y = 0; $y <= 20; $y++ ) {
    echo "$y <br>";
  }

  echo "<h3>foreach:</h3>";

  //foreach
  $numArray = array(3, 7, 18, 23, 99);   
  foreach($numArray as $value){
    echo "$value <br>";
  }
   
  echo "<h3>functions:</h3>";

  function someFunc($one, $two) {
    echo "$one . $two";
  }

  someFunc('first arge', 'second arg');

  echo "<hr>";

  //super global variable to get value from url params
  $name = $_GET['name'];

  
  //<?= is same as <?php echo
?>
<h1>
  <?=
    //htmlspecialchars() function converts special characters to HTML entities to help prevent injecting malicious code
    "Hello, " . htmlspecialchars($_GET['name']); 
    require 'index.view.php';
  ?>
</h1>

