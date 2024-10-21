<!DOCTYPE html>
<html>
<head>
    <title>Queue Operations</title>
</head>
<body>
    <h1>Queue Operations</h1>
    <form method="post">
        <label for="element">Enter element:</label>
        <input type="text" name="element" id="element" required><br><br>
        <input type="submit" name="operation" value="Insert Element">
        <input type="submit" name="operation" value="Delete Element">
        <input type="submit" name="operation" value="Display Queue">
    </form>

    <?php
    // Initialize the queue as an empty array
    session_start(); // Start session to maintain queue state
    if (!isset($_SESSION['queue'])) {
        $_SESSION['queue'] = [];
    }

    // Handle operations based on button clicked
    if (isset($_POST['operation'])) {
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'Insert Element':
                $element = $_POST['element'];
                // Insert element at the end of the queue
                array_push($_SESSION['queue'], $element);
                echo "<p>Inserted: $element</p>";
                break;

            case 'Delete Element':
                if (!empty($_SESSION['queue'])) {
                    // Remove the first element from the queue
                    $removed = array_shift($_SESSION['queue']);
                    echo "<p>Deleted: $removed</p>";
                } else {
                    echo "<p>Queue is empty! Nothing to delete.</p>";
                }
                break;

            case 'Display Queue':
                echo "<h3>Queue Contents:</h3>";
                if (empty($_SESSION['queue'])) {
                    echo "<p>Queue is empty!</p>";
                } else {
                    echo "<ul>";
                    foreach ($_SESSION['queue'] as $item) {
                        echo "<li>$item</li>";
                    }
                    echo "</ul>";
                }
                break;
        }
    }
    ?>
</body>
</html>
