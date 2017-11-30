<div>
  <h3>PHP here:</h3>
</div>
<?php


  $matt = 'Matt Larson';
  $greeting = 'hello world!';

  echo $greeting . ' ' . $matt;
  
  echo "Hello, $matt";

 
echo "<h3>Car object:</h3>";
 

  class Car {
    function Car() {
        $this->model = "VW";
    }
  }

  // create an object
  $herbie = new Car();

  // show object properties
  echo $herbie->model;

echo "<h2>Constant:</h2>";

  //php constant variable:
  define(number, 6);

  echo number;

echo "<hr>";

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
  $numArray = [3, 7, 18, 23, 99]; //can also use array(); like this: $numArray = array(6, 5, 3);

  //push to array without key/value pairs
  $numArray[] = 33;
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

echo "<h1>";

    //htmlspecialchars() function converts special characters to HTML entities to help prevent injecting malicious code
    // "Hello, " . htmlspecialchars($_GET['name']); 

    $matthew = [
      'age' => 33,
      'name' => 'Matt',
      'beard' => true
    ];

    //push to array
    $matthew['height'] = 'five eleven';

    //remove from array
    // unset($matthew['age']);
    
    foreach($matthew as $feature => $val) {
      echo "<strong>$feature</strong><li>$val</li>";
    };
    
    echo "<h3>var_dump:</h3>";
    //print current value of a variable
    var_dump($matthew);

    echo "<h3>print_r:</h3>";
    //print as "human readable"
    print_r($matthew);

echo "</h1>";

//given a year arg, returns the current century. ceil() rounds a fraction up.w
function getCentury($year) {
  return ceil($year / 100);
}

echo "<h1>getCentury:</h1>";

print_r(getCentury(1345));

$string = 'aaabaaaa';

echo strrev($string);

require('index.view.php');


