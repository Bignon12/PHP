<?php
//Démarrer la session
session_start ();

//on vérifie si le formulaire a été soumis
if (isset($_POST["btn"])){

   //on récupère la valeur de l'email, du mot de passe saisie
    $email = $_POST["email"];
    $mp = $_POST["mp"];
 
    //on définit une fonction pour vérifier la validité de l'email saisi
    function verif_email($email){
        $valid = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z]+$/";
        if (preg_match($valid, $email)){
            return true;
        }
        else{
            echo "<p>Adresse email invalide</p>";
            return false;
        }
    }
    
    //On vérifie si l'email est valide 
    if (verif_email($email) == true){
        //on crée une session sous forme de tableau et on lui attribue la valeur "ok"
        $_SESSION["auth"] = "ok";
        //var_dump ($_SESSION);
        header ("location: valide.php");
        exit();
    }
    else{
        echo "Veuillez remplir correctement le formulaire";
        unset ($_SESSION["auth"]);
        session_destroy();
        header("location; login_form.php");
       
    }
   
};


?>