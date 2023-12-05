<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valide</title>
</head>
<body>
    <?php
    session_start();
    $nom = $_SESSION["nom"];
    $prenom = $_SESSION["prenom"];
    echo "Vous êtes connecté: M. " .$prenom. " " . $nom;
    if ($_SESSION["auth"]!=="ok"){
        header ("location: login_form.php");
        exit();
    }
    ?>
</body>
</html>