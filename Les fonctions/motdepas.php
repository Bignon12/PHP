<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
function verifMotDePasse ($MotDepasse)
{
    $MotDePasse = "";
 //vérifier la longueur
 if (strlen($MotDePasse) < 8)
 {
    return false;
 } 
//vérifie s'il y a au moins une majuscule et une minuscule
if (!preg_match([A-Z], $MotDePasse) || (!preg_match([a-z], $MotDePasse))){
    return false;
}
//vérifie s'il y a au moins un chiffre
if (!preg_match([0-9], $MotDePasse)){
    return false;

    //si toutes les conditions sont réunie, le mot de passe est valide.
    return true;
}
}

$MotDePassetest = "MotDePasse1";
if (verifMotDePasse($MotDePassetest)){
    echo ("Mot de passe valide");
}

?>

</body>
</html>