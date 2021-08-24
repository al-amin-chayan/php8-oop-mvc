<?php 
$title = 'Task List';
include BASE_PATH . 'app/views/common/header.php';
?>
<ul>
<?php foreach($tasks as $task): ?>
    <li>
        <?php if($task->complete): ?>
            <del><?= $task->description ?></del>
        <?php else: ?>
            <?= $task->description ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<form method="POST" action="/tasks/store">
    <input type="text" name="description" placeholder="Description"/>
    <button type="submit" name="Save">Save</button>
</form>
<?php include BASE_PATH . 'app/views/common/footer.php' ?>
