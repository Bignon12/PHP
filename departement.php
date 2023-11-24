<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Département</title>
</head>
<body>
    <?php
 
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

// Triez le tableau principal par les clés (les noms des régions) par ordre alphabétique
ksort($departements);

// Affichez les régions et leur nombre de départements avec les départements 
foreach ($departements as $region => $departementList) {
    $nombreDepartements = count($departementList);
    echo "<strong>$region :</strong> $nombreDepartements départements<br>";
    
    echo "<ul>";
    foreach ($departementList as $departement) {
        echo "<li>$departement</li>";
    }
    echo "</ul>";
    
    echo "<br>";
}
?>



</body>
</html>
