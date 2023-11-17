<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année non bissextile</title>
</head>
<body>
    
</body>
</html>
<?php
$tableaumois = [
    "janvier" => 31,
    "février" => 28, //29 en cas d'années bissextiles
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "août" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "décembre" => 31,
];


echo "<table border = '1'>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach($tableaumois as $mois => $jours)
{
    echo "<tr><td>$mois</td><td>$jours</td></tr>";
}
echo "<table><br>";

echo "<table border = '1'>";
echo "<tr><td>Mois de 31 jours</td><td>jours</td>";
foreach($tableaumois as $mois => $jours)
{
    if ($jours === "31")
    {
        echo "<td>".$mois."</td><td>".$jours."</td></tr>";
    }
    
};
echo "<table><br>";

echo "<table border = '1'>";
echo "<tr><td>Mois de 31 jours</td><td>jours</td>";
foreach($tableaumois as $mois => $jours)
{
    if ($jours === "30")
    {
        echo "<td>".$mois."</td><td>".$jours."</td></tr>";
    }
    
};
echo "<table><br>";

echo "<table border = '1'>";
echo "<tr><td>Mois de 31 jours</td><td>jours</td>";
foreach($tableaumois as $mois => $jours)
{
    if ($jours === "28")
    {
        echo "<td>".$mois."</td><td>".$jours."</td></tr>";
    }
    
};
echo "<table><br>";
?>

?>
