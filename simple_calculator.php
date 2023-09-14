<!DOCTYPE html>
<html>
<head>
    <title>Task 7: Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form method="post" action="">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" required>
        
        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" id="num2" required>
        
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get the numbers and operation from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        // Perform the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = "Division by zero error!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operation";
        }
        
        // Display the result
        echo "<p>Result: {$result}</p>";
    }
    ?>
</body>
</html>
