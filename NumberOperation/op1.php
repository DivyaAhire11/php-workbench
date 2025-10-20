<!DOCTYPE html>
<html>
<head>
    <title>Number Operations</title>
</head>
<body>
    <h2>Enter Two Integers</h2>
    <form method="post">
        <label>First Number:</label><br>
        <input type="number" name="num1" required><br><br>

        <label>Second Number:</label><br>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Calculate">
    </form>

<?php
// Function (a): Modulus
function findMod($a, $b) {
    return $a % $b;
}

// Function (b): Power
function findPower($a, $b) {
    return pow($a, $b);
}

// Function (c): Sum of first n numbers
function sumFirstN($n) {
    // Using formula n*(n+1)/2
    return ($n * ($n + 1)) / 2;
}

// Function (d): Factorial
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];

    echo "<h3>Results:</h3>";

    // (a)
    echo "<p>(a) Modulus of $num1 % $num2 = <b>" . findMod($num1, $num2) . "</b></p>";

    // (b)
    echo "<p>(b) Power $num1 ^ $num2 = <b>" . findPower($num1, $num2) . "</b></p>";

    // (c)
    echo "<p>(c) Sum of first $num1 numbers = <b>" . sumFirstN($num1) . "</b></p>";

    // (d)
    echo "<p>(d) Factorial of $num2 = <b>" . factorial($num2) . "</b></p>";
}
?>
</body>
</html>
