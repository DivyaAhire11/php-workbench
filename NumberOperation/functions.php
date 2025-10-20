<?php
// Function to perform operation (with default operator = 'add')
function calculate($a, $b, $op = 'add') {
    switch ($op) {
        case 'add':
            return $a + $b;
        case 'sub':
            return $a - $b;
        case 'mul':
            return $a * $b;
        case 'div':
            if ($b == 0) {
                return "Cannot divide by zero";
            } else {
                return $a / $b;
            }
        default:
            return "Invalid Operation";
    }
}
?>
