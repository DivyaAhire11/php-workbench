<!DOCTYPE html>
<html>
<head>
    <title>String Separator Operations</title>
</head>
<body>
    <h2>String Separator Operations</h2>
    <form method="post">
        <label>Enter String:</label><br>
        <input type="text" name="userString" required><br><br>

        <label>Select Separator:</label><br>
        <select name="separator" required>
            <option value="#">#</option>
            <option value="|">|</option>
            <option value="%">%</option>
        </select><br><br>

        <label>Enter Replacement Separator:</label><br>
        <input type="text" name="newSeparator" required><br><br>

        <input type="submit" value="Submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['userString'];
    $sep = $_POST['separator'];
    $newSep = $_POST['newSeparator'];

    echo "<h3>Results:</h3>";

    // (a) Split the string into separate words using the given separator
    $parts = explode($sep, $string);
    echo "<p>(a) Splitted words:</p>";
    echo "<ul>";
    foreach ($parts as $word) {
        echo "<li>" . htmlspecialchars($word) . "</li>";
    }
    echo "</ul>";

    // (b) Replace all occurrences of separator in the given string with some other separator
    $replacedString = str_replace($sep, $newSep, $string);
    echo "<p>(b) String after replacing separator '$sep' with '$newSep': <b>$replacedString</b></p>";

    // (c) Find the last word in the given string
    $lastWord = end($parts);
    echo "<p>(c) The last word in the given string: <b>" . htmlspecialchars($lastWord) . "</b></p>";
}
?>
</body>
</html>
