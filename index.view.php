<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laracasts PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?= "Hello <h2>$name</h2>"; ?>    
    <?php 
        $animals = ['cat', 'dog', 'bird'];
        foreach($animals as $animal) {
            echo "<li>$animal</li>";
        }
    ?>
</body>
</html>