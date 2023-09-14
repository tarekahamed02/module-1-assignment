<!DOCTYPE html>
<html>
<head>
    <title>Task 1: My Personal Information</title>
</head>
<body>
    <h1>Personal Information</h1>

    <?php
    // Define variables for personal information
    $name = "Tarek Ahamed";
    $age = 27; // Change to your actual age
    $country = "Bangladesh";
    $introduction = "Hello, I'm " . $name . ". I am " . $age . " years old, and I come from " . $country . ".";

    // Display personal information using echo statements
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Age:</strong> " . $age . "</p>";
    echo "<p><strong>Country:</strong> " . $country . "</p>";
    echo "<p><strong>Intro:</strong> " . $introduction . "</p>";
    ?>
</body>
</html>
