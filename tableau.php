<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<body>

<table "border" ="1">
    <tr>
        <th></th>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
  
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; 

  
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
