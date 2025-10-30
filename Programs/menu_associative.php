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
        // traverse in random order (preserve key=>value pairs but keys shuffled)
        $keys = array_keys($arr);
        shuffle($keys);
        $shuffled = array();
        foreach ($keys as $k) {
            $shuffled[$k] = $arr[$k];
        }
        $resultArray = $shuffled;

    } elseif ($choice === 'extract') {
        extract($arr); 
        $resultDisplay = "Created variables: "
            . "\$Sagar=" . htmlspecialchars($Sagar) . ", "
            . "\$Vicky=" . htmlspecialchars($Vicky) . ", "
            . "\$Leena=" . htmlspecialchars($Leena) . ", "
            . "\$Ramesh=" . htmlspecialchars($Ramesh);

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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Associative Array Result</h2>

    <?php if ($resultArray !== null): ?>
        <div class="result">
            <h3>Result (array):</h3>
            <table>
                <tr><th>Key</th><th>Value</th></tr>
                <?php foreach ($resultArray as $key => $value): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($key); ?></td>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php elseif ($resultDisplay !== ""): ?>
        <div class="result">
            <h3>Result:</h3>
            <p><?php echo nl2br(htmlspecialchars($resultDisplay)); ?></p>
        </div>
    <?php else: ?>
        <div class="result">
            <p>No operation performed yet. Go back and choose one.</p>
        </div>
    <?php endif; ?>

    <p><a href="index.html">← Back to menu</a></p>
</body>
</html>
