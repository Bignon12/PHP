<?php

use PHPUnit\Framework\TestCase;
require "Model/user.php";

class userTest extends TestCase
{
    //Les fonctions de test seront définies ici

    public function testAfficherNom()
    {
        $user = new User(43, "Bignon");
        $this->assertIsString($user->affichernom());
    
        //vérifie que le retour de la fonction contient le nom de l'utilisateur ("Bignon")
    
        $this->assertStringContainsStringignorIngCase("Bignon", $user->afficherNom());
    
        //vérifie que le message retourné par la fonction est correct
        $this->assertequals("Je m'appelle Bignon", $user->afficherNom(), "Le nom de l'utilisateur n'est pas correct");
    }
    
}

?>