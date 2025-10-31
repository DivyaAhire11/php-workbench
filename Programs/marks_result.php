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
    // Get input and split into arrays
    $subjects = explode(',', $_POST['subject']);
    $marks = explode(',', $_POST['marks']);

    // Clean spaces
    $subjects = array_map('trim', $subjects);
    $marks = array_map('trim', $marks);

    // Automatically create serial numbers (1, 2, 3, ...)
    $serials = range(1, count($subjects));

    // Calculate total, percentage, and grade
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            background: #fff;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }

        th {
            background: #007BFF;
            color: #fff;
        }

        h2 {
            color: #333;
        }
    </style>
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
            <td><?= $serials[$i] ?></td>
            <td><?= $subjects[$i] ?></td>
            <td><?= $marks[$i] ?></td>
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

    <p><a href="marks_result.html">← Back to Entry</a></p>
</body>
</html>
