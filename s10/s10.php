<?php
function mod($a, $b) {
    return $a % $b;
}

function power($a, $b) {
    return pow($a, $b);
}

function sum_of_n($n) {
    return ($n * ($n + 1)) / 2;
}

function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);

    echo "Mod of $num1 and $num2: " . mod($num1, $num2) . "<br>";
    echo "$num1 raised to the power of $num2: " . power($num1, $num2) . "<br>";
    echo "Sum of first $num1 numbers: " . sum_of_n($num1) . "<br>";
    echo "Factorial of $num2: " . factorial($num2) . "<br>";
}
?>
