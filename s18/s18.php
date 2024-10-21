<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <h1>Associative Array Operations</h1>
    <form method="post">
        <input type="submit" name="operation" value="Reverse Key-Value Pairs">
        <input type="submit" name="operation" value="Random Traverse">
        <input type="submit" name="operation" value="Convert to Variables">
        <input type="submit" name="operation" value="Display Elements">
    </form>

    <?php
    // Sample associative array
    $assocArray = [
        "name" => "Alice",
        "age" => 25,
        "city" => "New York"
    ];

    // Handle operations based on button clicked
    if (isset($_POST['operation'])) {
        switch ($_POST['operation']) {
            case 'Reverse Key-Value Pairs':
                $reversed = array_flip($assocArray);
                echo "<h3>Reversed Key-Value Pairs:</h3>";
                print_r($reversed);
                break;

            case 'Random Traverse':
                $keys = array_keys($assocArray);
                shuffle($keys);
                echo "<h3>Random Traversal:</h3>";
                foreach ($keys as $key) {
                    echo "$key => $assocArray[$key]<br>";
                }
                break;

            case 'Convert to Variables':
                foreach ($assocArray as $key => $value) {
                    $$key = $value;  // Convert to variable
                }
                echo "<h3>Converted Variables:</h3>";
                echo "Name: $name, Age: $age, City: $city";
                break;

            case 'Display Elements':
                echo "<h3>Array Elements:</h3>";
                foreach ($assocArray as $key => $value) {
                    echo "$key => $value<br>";
                }
                break;
        }
    }
    ?>
</body>
</html>
