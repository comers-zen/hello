<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Greeting</title>
</head>
<body>
    <h1>Welcome to the PHP Greeting App</h1>

    <?php
    // Include the greeting.php file
    include 'greeting.php';

    // Use the function from greeting.php to display a greeting
    displayGreeting();
    ?>
</body>
</html>
