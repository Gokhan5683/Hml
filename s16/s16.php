<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjects = explode(",", $_POST['subjects']);
    $marks = explode(",", $_POST['marks']);
    $serials = explode(",", $_POST['serials']);
    
    $totalMarks = 0;
    $subjectCount = count($marks);

    echo "<h2>Results</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Serial No</th><th>Subject Name</th><th>Marks Obtained</th></tr>";

    for ($i = 0; $i < $subjectCount; $i++) {
        $subject = trim($subjects[$i]);
        $mark = (int)trim($marks[$i]);
        echo "<tr><td>" . (int)trim($serials[$i]) . "</td><td>" . htmlspecialchars($subject) . "</td><td>" . $mark . "</td></tr>";
        $totalMarks += $mark;
    }

    $percentage = ($totalMarks / ($subjectCount * 100)) * 100;
    $grade = '';

    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "<tr><td colspan='2'>Total Marks</td><td>" . $totalMarks . "</td></tr>";
    echo "<tr><td colspan='2'>Percentage</td><td>" . round($percentage, 2) . "%</td></tr>";
    echo "<tr><td colspan='2'>Grade</td><td>" . $grade . "</td></tr>";
    echo "</table>";
}
?>
