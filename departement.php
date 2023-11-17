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

//Affichage de la liste des régions par ordre alphabétique
ksort($departements);
foreach($departements as $region => $listedepartement){
    echo "$region: \n";
    foreach($listedepartement as $departement){
        echo "- $departement\n";
    }
    echo "\n";
}

//Affichage de la liste des régions suivie du nombre de départements
foreach($departements as $region => $listedepartement){
    echo "$region: ";

        $nd = count ($listedepartement);
        echo "$nd \n";
    
   
}
echo "\n";
?>
</body>
</html>