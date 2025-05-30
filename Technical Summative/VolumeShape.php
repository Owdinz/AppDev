<!DOCTYPE html>
<html lang="en">


<style>
    table, th, td{
        border:1px solid black;
    }
    h2 {
        text-align: center;
    }
    .fruit-table {
        margin-bottom: 30px;
        width: 100%;
    }
</style>

<body style="Background-color: #f0f0f0; font-family: Arial, sans-serif;">
<h2>USING USER DEFINED FUNCTION</h2>


<?php

function volume_cube($s) {
    return pow($s, 3);
}

function volume_rectangular_prism($l, $w, $h) {
    return $l * $w * $h;
}

function volume_cylinder($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function volume_prism($A, $h) {
    return $A * $h;
}

function volume_pyramid($A, $h) {
    return ($A * $h) / 3;
}

function volume_cone($r, $h) {
    return (pi() * pow($r, 2) * $h) / 3;
}

function volume_sphere($r) {
    return (4/3) * pi() * pow($r, 3);
}

// Collect results for display
$results = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cube
    if (isset($_POST['side']) && $_POST['side'] !== '') {
        $s = floatval($_POST['side']);
        $results[] = [
            "Shape" => "Cube",
            "Values" => "s = $s",
            "Formula" => "V = s³",
            "Answer" => number_format(volume_cube($s), 2)
        ];
    }

    // Rectangular Prism
    if (
        isset($_POST['length'], $_POST['width'], $_POST['height']) &&
        $_POST['length'] !== '' && $_POST['width'] !== '' && $_POST['height'] !== ''
    ) {
        $l = floatval($_POST['length']);
        $w = floatval($_POST['width']);
        $h = floatval($_POST['height']);
        $results[] = [
            "Shape" => "Rectangular Prism",
            "Values" => "l = $l, w = $w, h = $h",
            "Formula" => "V = l × w × h",
            "Answer" => number_format(volume_rectangular_prism($l, $w, $h), 2)
        ];
    }

    // Cylinder
    if (
        isset($_POST['cyl_radius'], $_POST['cyl_height']) &&
        $_POST['cyl_radius'] !== '' && $_POST['cyl_height'] !== ''
    ) {
        $r = floatval($_POST['cyl_radius']);
        $h = floatval($_POST['cyl_height']);
        $results[] = [
            "Shape" => "Cylinder",
            "Values" => "r = $r, h = $h",
            "Formula" => "V = π × r² × h",
            "Answer" => number_format(volume_cylinder($r, $h), 2)
        ];
    }

    // Prism
    if (
        isset($_POST['prism_base_area'], $_POST['prism_height']) &&
        $_POST['prism_base_area'] !== '' && $_POST['prism_height'] !== ''
    ) {
        $A = floatval($_POST['prism_base_area']);
        $h = floatval($_POST['prism_height']);
        $results[] = [
            "Shape" => "Prism",
            "Values" => "A = $A, h = $h",
            "Formula" => "V = A × h",
            "Answer" => number_format(volume_prism($A, $h), 2)
        ];
    }

    // Pyramid
    if (
        isset($_POST['pyramid_base_area'], $_POST['pyramid_height']) &&
        $_POST['pyramid_base_area'] !== '' && $_POST['pyramid_height'] !== ''
    ) {
        $A = floatval($_POST['pyramid_base_area']);
        $h = floatval($_POST['pyramid_height']);
        $results[] = [
            "Shape" => "Pyramid",
            "Values" => "A = $A, h = $h",
            "Formula" => "V = (A × h) / 3",
            "Answer" => number_format(volume_pyramid($A, $h), 2)
        ];
    }

    // Cone
    if (
        isset($_POST['cone_radius'], $_POST['cone_height']) &&
        $_POST['cone_radius'] !== '' && $_POST['cone_height'] !== ''
    ) {
        $r = floatval($_POST['cone_radius']);
        $h = floatval($_POST['cone_height']);
        $results[] = [
            "Shape" => "Cone",
            "Values" => "r = $r, h = $h",
            "Formula" => "V = (π × r² × h) / 3",
            "Answer" => number_format(volume_cone($r, $h), 2)
        ];
    }

    // Sphere
    if (isset($_POST['sphere_radius']) && $_POST['sphere_radius'] !== '') {
        $r = floatval($_POST['sphere_radius']);
        $results[] = [
            "Shape" => "Sphere",
            "Values" => "r = $r",
            "Formula" => "V = (4/3) × π × r³",
            "Answer" => number_format(volume_sphere($r), 2)
        ];
    }
}
?>

<!-- HTML Form -->
<form method="post">
    <h3>Cube</h3>
    Side: <input type="number" step="any" name="side"><br><br>

    <h3>Rectangular Prism</h3>
    Length: <input type="number" step="any" name="length">
    Width: <input type="number" step="any" name="width">
    Height: <input type="number" step="any" name="height"><br><br>

    <h3>Cylinder</h3>
    Radius: <input type="number" step="any" name="cyl_radius">
    Height: <input type="number" step="any" name="cyl_height"><br><br>

    <h3>Prism</h3>
    Base Area: <input type="number" step="any" name="prism_base_area">
    Height: <input type="number" step="any" name="prism_height"><br><br>

    <h3>Pyramid</h3>
    Base Area: <input type="number" step="any" name="pyramid_base_area">
    Height: <input type="number" step="any" name="pyramid_height"><br><br>

    <h3>Cone</h3>
    Radius: <input type="number" step="any" name="cone_radius">
    Height: <input type="number" step="any" name="cone_height"><br><br>

    <h3>Sphere</h3>
    Radius: <input type="number" step="any" name="sphere_radius"><br><br>

    <input type="submit" value="Calculate Volumes">
</form>

<!-- Display results -->
<?php
if (!empty($results)) {
    echo "<h3>Volume of Shapes</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Shape</th><th>Values</th><th>Formula</th><th>Answer</th></tr>";
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>{$row['Shape']}</td>";
        echo "<td>{$row['Values']}</td>";
        echo "<td>{$row['Formula']}</td>";
        echo "<td>{$row['Answer']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>


</body>
</html>