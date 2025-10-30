<?php
function calculateGrade($percentage) {
    if ($percentage >= 90) return "A+";
    elseif ($percentage >= 80) return "A";
    elseif ($percentage >= 70) return "B";
    elseif ($percentage >= 60) return "C";
    elseif ($percentage >= 50) return "D";
    else return "F";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $serials = explode(',', $_POST['serial']);
    $subjects = explode(',', $_POST['subject']);
    $marks = explode(',', $_POST['marks']);

    $serials = array_map('trim', $serials);
    $subjects = array_map('trim', $subjects);
    $marks = array_map('trim', $marks);

    $total = array_sum($marks);
    $percentage = $total / count($marks);
    $grade = calculateGrade($percentage);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Marks Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Result</h2>

    <?php if (!empty($marks)): ?>
    <table>
        <tr>
            <th>Serial No</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <?php for ($i = 0; $i < count($marks); $i++): ?>
        <tr>
            <td><?= htmlspecialchars($serials[$i]) ?></td>
            <td><?= htmlspecialchars($subjects[$i]) ?></td>
            <td><?= htmlspecialchars($marks[$i]) ?></td>
        </tr>
        <?php endfor; ?>
        <tr>
            <th colspan="2">Total</th>
            <th><?= $total ?></th>
        </tr>
        <tr>
            <th colspan="2">Percentage</th>
            <th><?= round($percentage, 2) ?>%</th>
        </tr>
        <tr>
            <th colspan="2">Grade</th>
            <th><?= $grade ?></th>
        </tr>
    </table>
    <?php else: ?>
        <p>No data submitted.</p>
    <?php endif; ?>
</body>
</html>
