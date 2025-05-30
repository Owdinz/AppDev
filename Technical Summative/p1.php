<!DOCTYPE html>
<html>

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
<body style="background-color: #71C4C2;">
    <h2>NESFRUTA</h2>

    <?php
        require 'Fruits.php';

        usort($fruits, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        foreach ($fruits as $fruit) {
            echo "<table class='fruit-table'>";
            echo "<tr><th colspan='4'>My Fruits</th></tr>";
            echo "<tr>
                    <td style='width:14%; text-align:center;'>Image</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Facts</td>
                  </tr>";
            echo "<tr>";
            echo "<td><img src='" . $fruit['image'] . "' alt='" . $fruit['name'] . "' style='width:100px;'></td>";
            echo "<td>" . $fruit['name'] . "</td>";
            echo "<td>" . $fruit['description'] . "</td>";
            echo "<td>" . $fruit['facts'] . "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>