<!DOCTYPE html>
<html>
<head>
    <title>Stack Operations</title>
</head>
<body>
    <h1>Stack Operations</h1>
    <form method="post">
        <label for="element">Enter element:</label>
        <input type="text" name="element" id="element" required><br><br>
        
        <input type="submit" name="operation" value="Insert Element">
        <input type="submit" name="operation" value="Delete Element">
        <input type="submit" name="operation" value="Display Stack">
    </form>

    <?php
    // Start session to maintain stack state
    session_start(); 
    if (!isset($_SESSION['stack'])) {
        $_SESSION['stack'] = [];
    }

    // Handle operations based on button clicked
    if (isset($_POST['operation'])) {
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'Insert Element':
                $element = $_POST['element'];
                // Push element onto the stack
                array_push($_SESSION['stack'], $element);
                echo "<p>Inserted: $element</p>";
                break;

            case 'Delete Element':
                if (!empty($_SESSION['stack'])) {
                    // Pop the top element from the stack
                    $removed = array_pop($_SESSION['stack']);
                    echo "<p>Deleted: $removed</p>";
                } else {
                    echo "<p>Stack is empty! Nothing to delete.</p>";
                }
                break;

            case 'Display Stack':
                echo "<h3>Stack Contents:</h3>";
                if (empty($_SESSION['stack'])) {
                    echo "<p>Stack is empty!</p>";
                } else {
                    echo "<ul>";
                    foreach (array_reverse($_SESSION['stack']) as $item) {
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
