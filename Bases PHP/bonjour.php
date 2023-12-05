<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour PHP</title>
</head>
<body>
<?php
    $texte = "<p>Bonjour le monde</p>";
    echo $texte;

    $ipserveur = $_SERVER["SERVER_ADDR"];
    $ipclient = $_SERVER["REMOTE_ADDR"];
    echo ("L'adresse ip du serveur est: " . $ipserveur);
    echo ("L'adresse ip du client est: " . $ipclient);

?>
</body>
</html>

