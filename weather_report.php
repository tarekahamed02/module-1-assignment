<!DOCTYPE html>
<html>
<head>
    <title>Task 5: Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    // Define the temperature variable
    $temperature = 25; // Change this to your desired temperature

    // Provide weather information based on the temperature range
    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature < 20) {
        $message = "It's cool.";
    } else {
        $message = "It's warm.";
    }

    // Display the weather information
    echo "<p>Temperature: {$temperature} &deg;C</p>";
    echo "<p>{$message}</p>";
    ?>
</body>
</html>
