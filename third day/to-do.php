<?php
session_start();

if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = array();
}

if (isset($_POST['add'])) {
    $item = $_POST['item'];
    array_push($_SESSION['todo_list'], $item);
}

if (isset($_POST['remove'])) {
    $index = $_POST['index'];
    unset($_SESSION['todo_list'][$index]);
}

?>

<h2>To-Do List</h2>

<form method="post">
    <input type="text" name="item" placeholder="Add new item">
    <button type="submit" name="add">Add</button>
</form>

<ul>
    <?php foreach ($_SESSION['todo_list'] as $index => $item): ?>
        <li>
            <?php echo $item; ?>
            <form method="post" style="display: inline-block;">
                <input type="hidden" name="index" value="<?php echo $index; ?>">
                <button type="submit" name="remove">Remove</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

<?php session_write_close(); ?>