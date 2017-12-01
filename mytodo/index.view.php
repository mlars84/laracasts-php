<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My To Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><h3><?= $task->description; ?></h3></strike>
                <?php else: ?>
                    <h3><?= $task->description; ?></h3>
                <?php endif ?>
                

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>