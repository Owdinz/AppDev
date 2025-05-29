<!DOCTYPE html>
<html>

<style>
    table, th, td{
        border:1px solid black;
    }
    h2 {
  text-align: center;
}
</style>
<!--table-->
<body>
    <h2>NESFRUTA</h2>

    <table style="width:100%">
<tr>
    <th colspan="4">My Fruits</th>
</tr>
<tr>
    <td style="width:14%; text-align=center;">Image</td>
    <td>Name</td>
    <td>Description</td>
    <td>Facts</td>
  </tr>


  <!--for PHP-->
    <?php
        require 'fruits.html';

        usort($fruits, function($a,$b){
            return strcmp($a['name'], $b['name'])
        });

        foreach($fruits as $fruit){}
    ?>
</table>
</body>
</html>