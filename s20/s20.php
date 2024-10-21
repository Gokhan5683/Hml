<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <h1>Associative Array Operations</h1>
    <form method="post">
        <input type="submit" name="operation" value="Split Array into Chunks">
        <input type="submit" name="operation" value="Sort Array by Values">
        <input type="submit" name="operation" value="Filter Even Elements">
    </form>

    <?php
    // Sample associative array
    $assocArray = [
        "a" => 10,
        "b" => 5,
        "c" => 20,
        "d" => 15,
        "e" => 2
    ];

    // Handle operations based on button clicked
    if (isset($_POST['operation'])) {
        switch ($_POST['operation']) {
            case 'Split Array into Chunks':
                $chunkedArray = array_chunk($assocArray, 2, true);
                echo "<h3>Array Split into Chunks:</h3>";
                print_r($chunkedArray);
                break;

            case 'Sort Array by Values':
                $sortedArray = $assocArray; // Copy the original array
                asort($sortedArray); // Sort by values while maintaining keys
                echo "<h3>Array Sorted by Values:</h3>";
                print_r($sortedArray);
                break;

            case 'Filter Even Elements':
                $filteredArray = array_filter($assocArray, function($value) {
                    return $value % 2 === 0; // Filter even values
                });
                echo "<h3>Filtered Even Elements:</h3>";
                print_r($filteredArray);
                break;
        }
    }
    ?>
</body>
</html>
