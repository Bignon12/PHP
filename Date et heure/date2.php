<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
       // Combien reste-t-il de jours avant la fin de votre formation.
       $dateActuelle = new DateTimeImmutable(str_replace("/", "-", "2023/11/16")); // Timestamp de la date actuelle
       $dateLimite = new DateTimeImmutable(str_replace("/", "-","2023/12/08")); // Timestamp de la date limite
       $interval = $dateActuelle->diff($dateLimite);
       echo "Il reste " . $interval->format("%R%a jours") . " avant la fin de votre formation";
   
    ?>
</body>
</html>