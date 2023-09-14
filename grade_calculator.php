<!DOCTYPE html>
<html>
<head>
    <title>Task 3: Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required>
        
        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required>
        
        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required>
        
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get the test scores from the form
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];
        
        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;
        
        // Determine the corresponding letter grade
        if ($average >= 80) {
            $grade = 'A+';
        } elseif ($average >= 70) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'A-';
        } else {
            $grade = 'F';
        }
        
        // Display the average and letter grade
        echo "<p>Average Score: " . number_format($average, 2) . "</p>";
        echo "<p>Letter Grade: " . $grade . "</p>";
    }
    ?>
</body>
</html>
