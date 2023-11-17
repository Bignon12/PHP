
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Liens</title>
</head>
<body>

<?php
// Chemin vers votre fichier
$ressource = __DIR__. DIRECTORY_SEPARATOR . "liens.txt";

// Vérifie si le fichier existe
if (file_exists($ressource)) {
    // Lit le contenu du fichier dans un tableau
    $contenuFichier = file($ressource, FILE_IGNORE_NEW_LINES);

    // Affiche chaque lien dans la liste
    echo '<ul>';
    foreach ($contenuFichier as $ligne) {
        echo '<li><a href="' . $ligne . '">' . $ligne . '</a></li>';
    }
    echo '</ul>';
} else {
    echo 'Le fichier n\'existe pas.';
}

$ToutLigne = file(__DIR__. DIRECTORY_SEPARATOR . "customers.csv");
print_r($ToutLigne);
echo "<table class=table><section><thead><tr>
      <th Prenoms</th>
      <th Nom </th>
      <th Email</th>
      <th Telephone</th>
      <th Ville</th>
      <th Etats</th></tr></thead><tbody>";

foreach($ToutLigne as $ligne){
    $ligne = explode(",", $ligne);
    echo "<tr>";
    foreach($ligne as $item){
        echo '<td>' . $item. '</td>';
    };
    echo "</tr>";
};
echo "</tbody></section></table>";

?>
</body>
</html>

