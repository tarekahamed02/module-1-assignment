<!DOCTYPE html>
<html>
<head>
    <title>Task 6: Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>

    <form method="post" action="">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" required>
        
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" required>
        
        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    if (isset($_POST['compare'])) {
        // Get the numbers from the form
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        
        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        
        // Display the result
        echo "<p>The larger number is: {$largerNumber}</p>";
    }
    ?>
</body>
</html>
