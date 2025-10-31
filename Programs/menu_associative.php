<?php
// Define associative array
$arr = array(
    "Sagar"  => "31",
    "Vicky"  => "41",
    "Leena"  => "39",
    "Ramesh" => "40"
);

$resultDisplay = "";   
$resultArray = null; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = isset($_POST['choice']) ? $_POST['choice'] : '';

    if ($choice === 'reverse') {
        // swap keys and values
        $resultArray = array_flip($arr);

    } elseif ($choice === 'shuffle') {
        // shuffle keys but keep key=>value pairs together
        $keys = array_keys($arr);
        shuffle($keys);
        $shuffled = array();
        foreach ($keys as $k) {
            $shuffled[$k] = $arr[$k];
        }
        $resultArray = $shuffled;

    } elseif ($choice === 'extract') {
        //  array keys -> variables
        extract($arr); 
        $resultDisplay = "Created variables: \$Sagar=$Sagar, \$Vicky=$Vicky, \$Leena=$Leena, \$Ramesh=$Ramesh";

    } elseif ($choice === 'display') {
        // original array
        $resultArray = $arr;
    } else {
        $resultDisplay = "Invalid choice.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Result - Associative Array Menu</title>
</head>
<body>
    <h2>Associative Array Result</h2>

    <?php 
    if ($resultArray !== null) {
        echo "<div class='result'>";
        echo "<h3>Result (array):</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Key</th><th>Value</th></tr>";
        foreach ($resultArray as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table></div>";
    } elseif ($resultDisplay !== "") {
        echo "<div class='result'>";
        echo "<h3>Result:</h3>";
        echo "<p>$resultDisplay</p>";
        echo "</div>";
    } else {
        echo "<div class='result'>";
        echo "<p>No operation performed yet. Go back and choose one.</p>";
        echo "</div>";
    }
    ?>

    <p><a href="menu_associative.html">← Back to menu</a></p>
</body>
</html>
