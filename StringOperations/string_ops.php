<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $large = $_POST['large'];
    $small = $_POST['small'];
    $n = (int)$_POST['n'];

    echo "<h2>Results:</h2>";

    // (a) Check if small string appears at the start of large string
    if (stripos($large, $small) === 0) { // case-insensitive start check
        echo "<p>(a) The small string <b>'$small'</b> appears at the start of the large string <b>'$large'</b>.</p>";
    } else {
        echo "<p>(a) The small string <b>'$small'</b> does NOT appear at the start of the large string <b>'$large'</b>.</p>";
    }

    // (b) Find the position of the small string in the big string
    $pos = stripos($large, $small); // case-insensitive position
    if ($pos !== false) {
        echo "<p>(b) The small string <b>'$small'</b> is found at position <b>$pos</b> (0-based index) in the large string.</p>";
    } else {
        echo "<p>(b) The small string <b>'$small'</b> is not found in the large string.</p>";
    }

    // (c) Compare both the strings for first n characters (case-insensitive)
    $result = strncasecmp($large, $small, $n);
    if ($result == 0) {
        echo "<p>(c) The first <b>$n</b> characters of both strings are <b>equal</b> (case-insensitive).</p>";
    } else {
        echo "<p>(c) The first <b>$n</b> characters of both strings are <b>NOT equal</b> (case-insensitive).</p>";
    }
}
?>
