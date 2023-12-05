
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Liens</title>
</head>
<body>

<?php

$filecontent = file ("liens.txt");
echo "<ul>";
foreach($filecontent as $ligne){
    echo "<li><a href = ' . $ligne .'>" . $ligne . "</a></li>";
}
echo "</ul>";

?>

</body>
</html>

