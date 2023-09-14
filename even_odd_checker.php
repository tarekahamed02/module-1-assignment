<!DOCTYPE html>
<html>
<head>
    <title>Task 4: Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>

    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        // Get the number from the form
        $number = $_POST['number'];
        
        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }
        
        // Display the result
        echo "<p>The number {$number} is {$result}.</p>";
    }
    ?>
</body>
</html>
