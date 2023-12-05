<?php
//Démarrer la session
session_start ();

//on vérifie si le formulaire a été soumis
if (isset($_POST["btn"])){

   //on récupère la valeur des différents champs
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mp1 = $_POST["mp1"];
    $mp2 = $_POST["mp2"];
    $mp_hach = password_hash($_POST["mp1"], PASSWORD_DEFAULT);
    $hach = "$2y$10$6m3DRcEACItUmX6Us9U62enRH2pc3sUquvGg/VY1mFuvJous3HwJC"; //mon mot de passe haché
    //var_dump($mp_hach);
    
    //on définit des fonctions pour vérifier la validité des valeurs des champs

    function verif_nom($nom){
        $valid = "/^[a-zA-Z]+$/";
        if (preg_match($valid, $nom)){
            return true;
        }
        else{
            echo "<p>Veuillez entrer un nom valide</p>";
            return false;
        }
    }


    function verif_prenom($prenom){
        $valid = "/^[a-zA-Z]+$/";
        if (preg_match($valid, $prenom)){
            return true;
        }
        else{
            echo "<p>Veuillez entrer un prénom valide</p>";
            return false;
        }
    }

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
    
    //On vérifie si le pseudonyme, l'email et le mot de passe sont valides 
    if (verif_nom($nom) == true && verif_prenom($prenom) == true && verif_email($email) == true && password_verify($mp1, $hach) && password_verify($mp2, $hach)){
        //on crée une session sous forme de tableau et on lui attribue la valeur "ok" avec les élements suivnats
        $_SESSION["auth"] = "ok";
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        //var_dump ($_SESSION);
        header ("location: valide.php");
        exit();
    }
    else{
        //on affiche un message d'erreur et on supprime la session
        echo "Veuillez remplir correctement le formulaire";
        unset ($_SESSION["auth"]);
        session_destroy();
       
    }
   
};

?>