<?php require('partials/head.php'); ?>

    <h2>Tasks:</h2>
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

<?php require('partials/footer.php'); ?>