<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .white {
            background-color: white;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>

<h2>Chess Board</h2>

<table border="1">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $total = $row + $col;
            if ($total % 2 == 0) {
                echo "<td class='white'></td>";
            } else {
                echo "<td class='black'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
