<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = trim($_POST['inputString']);

    // a. Select first 5 words
    $words = explode(" ", $inputString);
    $firstFiveWords = implode(" ", array_slice($words, 0, 5));

    // b. Convert to lowercase and then to Title case
    $lowercaseString = strtolower($inputString);
    $titleCaseString = ucwords($lowercaseString);

    // c. Pad with "*"
    $paddedString = "*" . $inputString . "*";

    // d. Remove leading whitespaces
    $trimmedString = ltrim($inputString);

    // e. Find the reverse of the string
    $reversedString = strrev($inputString);

    // Display results
    echo "<h2>String Operations Results</h2>";
    echo "<strong>Original String:</strong> $inputString <br>";
    echo "<strong>First 5 Words:</strong> $firstFiveWords <br>";
    echo "<strong>Lowercase:</strong> $lowercaseString <br>";
    echo "<strong>Title Case:</strong> $titleCaseString <br>";
    echo "<strong>Padded String:</strong> $paddedString <br>";
    echo "<strong>Trimmed String:</strong> $trimmedString <br>";
    echo "<strong>Reversed String:</strong> $reversedString <br>";
}
?>
