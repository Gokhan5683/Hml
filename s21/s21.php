<!DOCTYPE html>
<html>
<head>
    <title>Spring High Temperatures</title>
</head>
<body>
    <h1>High Temperatures for a Spring Month</h1>

    <?php
    // Array of high temperatures for spring
    $highTemps = [65, 70, 72, 75, 78, 80, 82, 85, 87, 90, 92, 85, 88, 76, 74];

    // Calculate the average high temperature
    $averageTemp = array_sum($highTemps) / count($highTemps);

    // Sort the temperatures to find the five warmest
    sort($highTemps);
    $warmestTemps = array_slice($highTemps, -5); // Get the last 5 elements (warmest)

    // Display results
    echo "<h3>Average High Temperature: " . round($averageTemp, 2) . "°F</h3>";
    echo "<h3>Five Warmest High Temperatures:</h3>";
    echo "<ul>";
    foreach ($warmestTemps as $temp) {
        echo "<li>$temp°F</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
