<?php
// include the function file
require 'functions.php';

// Get values from form
$num1 = (float)$_POST['num1'];
$num2 = (float)$_POST['num2'];
$operation = $_POST['operation'];

// Call the function
$result = calculate($num1, $num2, $operation);

// Display the result on new form
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h2>Result</h2>
    <p>First Number: <?php echo $num1; ?></p>
    <p>Second Number: <?php echo $num2; ?></p>
    <p>Operation: <?php echo $operation; ?></p>
    <h3>Result = <?php echo $result; ?></h3>

    <br><a href="form.php">Go Back</a>
</body>
</html>
