<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <h1>String Operations</h1>
    <form method="post">
        <label>Sentence:</label><br>
        <textarea name="s" rows="4" cols="50" required></textarea><br><br>
        
        <label>Word:</label><br>
        <input type="text" name="w" required><br><br>

        <label>Position to delete:</label>
        <input type="number" name="posDel" required><br>
        
        <label>Length to delete:</label>
        <input type="number" name="lenDel" required><br><br>

        <label>Position to insert:</label>
        <input type="number" name="posIns" required><br><br>

        <label>Position to replace:</label>
        <input type="number" name="posRep" required><br>
        
        <label>Length to replace:</label>
        <input type="number" name="lenRep" required><br><br>

        <input type="submit" name="submit" value="Perform Operations">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get inputs
        $s = $_POST['s'];      // Sentence
        $w = $_POST['w'];      // Word
        $posDel = $_POST['posDel'];  // Position to delete
        $lenDel = $_POST['lenDel'];  // Length to delete
        $posIns = $_POST['posIns'];  // Position to insert
        $posRep = $_POST['posRep'];  // Position to replace
        $lenRep = $_POST['lenRep'];  // Length to replace

        // a. Delete part of the string
        $del = substr($s, 0, $posDel) . substr($s, $posDel + $lenDel);
        
        // b. Insert the word into the sentence
        $ins = substr($s, 0, $posIns) . $w . substr($s, $posIns);
        
        // c. Replace part of the string with the word
        $rep = substr($s, 0, $posRep) . $w . substr($s, $posRep + $lenRep);

        // Display results
        echo "<h3>Results:</h3>";
        echo "<strong>Original:</strong> $s<br>";
        echo "<strong>After Deletion:</strong> $del<br>";
        echo "<strong>After Insertion:</strong> $ins<br>";
        echo "<strong>After Replacement:</strong> $rep<br>";
    }
    ?>
</body>
</html>
