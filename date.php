<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php

//Trouvez le numéro de semaine de la date suivante : 14/07/2019
    date_default_timezone_set("Europe/Paris");
    $debut = new DateTime();
    $ladate = "14/07/2019";
    $timestamp = strtotime(str_replace("/", "-", $ladate));
    $numsemaine = date("W", $timestamp);
    echo"<p>Le numéro de la semaine de la date 14/07/2019 est: $numsemaine</p> <br>";

   
   // Combien reste-t-il de jours avant la fin de votre formation.
    $dateActuelle = new DateTimeImmutable(str_replace("/", "-", "2023/11/16")); // Timestamp de la date actuelle
    $dateLimite = new DateTimeImmutable(str_replace("/", "-","2023/12/08")); // Timestamp de la date limite
    $interval = $dateActuelle->diff($dateLimite);
    echo "Il reste " . $interval->format("%R%a jours") . " avant la fin de votre formation";

    //Comment déterminer si une année est bissextile ?
    function estBissextile($annee) {
    // Si l'année est divisible par 4
    if ($annee % 4 == 0) {
        // Si l'année est divisible par 100
        if ($annee % 100 == 0) {
            // Si l'année est divisible par 400
            if ($annee % 400 == 0) {
                return true; // Année bissextile
            } else {
                return false; // Année non bissextile
            }
        } else {
            return true; // Année bissextile
        }
    } else {
        return false; // Année non bissextile
    }
}

// Exemple d'utilisation
$annee = 2023;

if (estBissextile($annee)) {
    echo "$annee est une année bissextile.";
} else {
    echo "$annee n'est pas une année bissextile.";
}
?>

    







</body>
</html>