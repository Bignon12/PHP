<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 

    // on récupère les données par POST
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $sexe = $_POST["flexRadioDefault"];
    $dateDenais = $_POST["ddn"]; 

    // affichage des données 
    echo "<p>Nom: $nom</p>";
    echo "<p>Prénom: $prenom</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Sexe: $sexe</p>";
    echo "<p>Date de Naissance: $dateDenais</p>";

} 
else { 

    echo "Veuillez remplir les champs"; 
}

?>
