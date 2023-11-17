<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme</title>
</head>
<body>
    <?php
      function calculerSomme($tableau){
        $somme = 0;
        foreach($tableau as $valeur){
            $somme+=$valeur;
        }
        return $somme;
    };
    $tab = array(4, 3, 8, 2);
    $Resultat = calculerSomme($tab);

    echo "<p>La somme de 4+3+8+2 est égale à: $Resultat </p>";
    ?>
</body>
</html>