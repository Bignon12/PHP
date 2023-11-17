<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les capitales</title>
</head>
<body>

    <?php
    $capitales = array (

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"
);
//Affichage de la liste des capitales par ordre alphabétique
echo "<table border = '1'><section><tr>";
ksort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo "<td>$capitale</td><td>$pays</td></tr>";
};
echo ">/section></table>";

//Affichage de la liste des pays par ordre alphabétique
echo "<table border = '1'><section><tr>";
asort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo "<td>$capitale</td><td>$pays</td></tr>";
}
echo ">/section></table>";

//Nombre d'éléments du tableau
$nombre = count($capitales);
echo "Le tableau contient $nombre élements";


//supprimer les capitales ne commençant pas par B
foreach ($capitales as $capitale => $pays) {

   if (substr($capitale, 0,1) !== "B");
   {
    unset ($capitales[$capitale]);
   }
}
echo "<table border ='1'><section><tr>";
foreach ($capitales as $capitale => $pays){
    echo "<td>$capitale</td><td>$pays</td></tr>";
}
echo "</section></table><br>";

foreach ($capitales as $capitale => $pays) {

    if (substr($capitale, 0,1) !== "B");
    {
     unset ($capitales[$capitale]);
     echo "$capitale = $pays\n";
    }
 }

?>
</body>
</html>