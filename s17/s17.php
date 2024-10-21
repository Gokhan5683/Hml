<?php
$array = array("Sagar" => "31", "Vicky" => "41", "Leena" => "39", "Ramesh" => "40");

// a) Ascending order sort by Value
asort($array);
echo "<h3>Ascending Order Sort by Value:</h3>";
foreach ($array as $key => $value) {
    echo "$key => $value<br>";
}

// b) Ascending order sort by Key
ksort($array);
echo "<h3>Ascending Order Sort by Key:</h3>";
foreach ($array as $key => $value) {
    echo "$key => $value<br>";
}

// c) Descending order sort by Value
arsort($array);
echo "<h3>Descending Order Sort by Value:</h3>";
foreach ($array as $key => $value) {
    echo "$key => $value<br>";
}

// d) Descending order sort by Key
krsort($array);
echo "<h3>Descending Order Sort by Key:</h3>";
foreach ($array as $key => $value) {
    echo "$key => $value<br>";
}
?>
