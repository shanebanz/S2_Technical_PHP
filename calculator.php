<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #fafafa;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
        }
        .volume-table {
            width: 600px;
            border-collapse: collapse;
            border: 4px double #000000;
            background-color: #ffffff;
            margin: 0 auto;
        }
        .main-header {
            background-color: #ffffff;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
            border-bottom: 4px double #000000;
        }
        .sub-header {
            background-color: #ffffff;
        }
        .sub-header th {
            border: 4px double #000000;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }
        tbody td {
            border: 4px double #000000;
            padding: 10px;
            text-align: center;
            font-size: 13px;
        }
        .values-column {
            width: 200px;
        }
        .formula-column {
            width: 200px;
        }
        .answer-column {
            width: 200px;
        }
    </style>
</head>
<body>
<?php
function calculateCubeVolume($side) {
    return pow($side, 3);
}

function calculateRectangularPrismVolume($length, $width, $height) {
    return $length * $width * $height;
}

function calculatePrismVolume($base_area, $height) {
    return $base_area * $height;
}

function calculateCylinderVolume($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

function calculatePyramidVolume($base_area, $height) {
    return (1/3) * $base_area * $height;
}

function calculateConeVolume($radius, $height) {
    return (1/3) * pi() * pow($radius, 2) * $height;
}

function calculateSphereVolume($radius) {
    return (4/3) * pi() * pow($radius, 3);
}

$shapes = [
    [
        'values' => 's = 5',
        'formula' => 'V = s³',
        'answer' => calculateCubeVolume(5)
    ],
    [
        'values' => 'l = 6, w = 4, h = 3',
        'formula' => 'V = l × w × h',
        'answer' => calculateRectangularPrismVolume(6, 4, 3)
    ],
    [
        'values' => 'A = 20, h = 8',
        'formula' => 'V = A × h',
        'answer' => calculatePrismVolume(20, 8)
    ],
    [
        'values' => 'r = 3, h = 10',
        'formula' => 'V = π × r² × h',
        'answer' => calculateCylinderVolume(3, 10)
    ],
    [
        'values' => 'A = 25, h = 9',
        'formula' => 'V = (1/3) × A × h',
        'answer' => calculatePyramidVolume(25, 9)
    ],
    [
        'values' => 'r = 4, h = 12',
        'formula' => 'V = (1/3) × π × r² × h',
        'answer' => calculateConeVolume(4, 12)
    ],
    [
        'values' => 'r = 6',
        'formula' => 'V = (4/3) × π × r³',
        'answer' => calculateSphereVolume(6)
    ]
];
?>

<div class="container">
    <table class="volume-table">
        <thead>
            <tr>
                <th colspan="3" class="main-header">Volume of Shapes</th>
            </tr>
            <tr class="sub-header">
                <th class="values-column">Values</th>
                <th class="formula-column">Formula</th>
                <th class="answer-column">Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shapes as $shape): ?>
            <tr>
                <td><?php echo $shape['values']; ?></td>
                <td><?php echo $shape['formula']; ?></td>
                <td><?php echo round($shape['answer'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>