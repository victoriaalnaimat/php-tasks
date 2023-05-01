<?php
session_start();

// Initialize tasks array
$tasks = [];

// If tasks already exist in session, load them
if (isset($_SESSION['tasks'])) {
    $tasks = $_SESSION['tasks'];
}

// Add task
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $tasks[] = $task;
    $_SESSION['tasks'] = $tasks;
}

// Remove task
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($tasks[$index]);
    $_SESSION['tasks'] = $tasks;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <form method="POST" action="todo.php">
        <label for="task">New Task:</label>
        <input type="text" id="task" name="task" placeholder="Enter a new task...">
        <button type="submit">Add Task</button>
    </form>

    <?php if (count($tasks) > 0): ?>
        <h2>Tasks:</h2>
        <ul>
            <?php foreach ($tasks as $index => $task): ?>
                <li>
                    <?php echo htmlspecialchars($task); ?>
                    <a href="todo.php?remove=<?php echo $index; ?>">[x]</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No tasks yet.</p>
    <?php endif; ?>
</body>
</html>
