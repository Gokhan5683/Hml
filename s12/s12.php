<?php
function calculate($num1, $num2, $operation = "add") {
    switch($operation) {
        case "add":
            return $num1 + $num2;
        case "subtract":
            return $num1 - $num2;
        case "multiply":
            return $num1 * $num2;
        case "divide":
            if ($num2 == 0) {
                return "Division by zero is not allowed!";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : "add";

    $result = calculate($num1, $num2, $operation);

    echo "The result of the operation is: " . $result;
}
?>
