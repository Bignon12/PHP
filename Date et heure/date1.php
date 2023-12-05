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

?>

    







</body>
</html>