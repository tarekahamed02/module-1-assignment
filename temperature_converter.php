<!DOCTYPE html>
<html>
<head>
    <title>Task 2: Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>
        
        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" id="conversion_type">
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $temperature = $_POST['temperature'];
        $conversion_type = $_POST['conversion_type'];
        
        if ($conversion_type === 'c_to_f') {
            $result = ($temperature * 9/5) + 32;
            echo "<p>{$temperature} &deg;C is equal to {$result} &deg;F</p>";
        } elseif ($conversion_type === 'f_to_c') {
            $result = ($temperature - 32) * 5/9;
            echo "<p>{$temperature} &deg;F is equal to {$result} &deg;C</p>";
        }
    }
    ?>
</body>
</html>
