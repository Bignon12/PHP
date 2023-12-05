<?php
session_start();
$title = "Contact";
require "header.php"
?>

<div>
    <h1 class="text-center">Veuillez indiquer votre préoccupation</h1>
</div>

    <form action = "scriptcontact.php" method = "POST">
        <div class= "row">
            <div class="mb-3 form-group col-6">
                <label for="nom" class="form-label" style ="font-family: 'Trebuchet, sans-serif; font-size: 25px;">Nom</label>
                <input type="text" class="form-control m" id="nom" name = "nom">
            </div>
            <div class="mb-3 form-group col-6">
                <label for="prenom" class="form-label" style ="font-family: 'Trebuchet, sans-serif; font-size: 25px;">Prénoms</label>
                <input type="text" class="form-control m" id="prenom" name = "prenom">
            </div>
        </div>

        <div class = "row">
            <div class="mb-3 form-group col-6">
                <label for="email" class="form-label" style ="font-family: 'Trebuchet, sans-serif; font-size: 25px;">Email</label>
                <input type="email" class="form-control" id="email" name = "email">
            </div>

            <div class="mb-3 form-group col-6">
                <label for="tel" class="form-label" style ="font-family: 'Trebuchet, sans-serif; font-size: 25px;">Téléphone</label>
                <input type="text" class="form-control m" id="tel" name = "tel">
            </div>
        </div>

        <div class="mb-3 form-group">
            <label for="text" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Votre demande</label>
            <textarea type="text" class="form-control" id="text" name = "text"></textarea>
        </div>

        <div class="d-grid justify-content-md-center">
        <button type="submit" id="btn_envoyer" class="btn btn-primary btn-lg" name="btn">Envoyer</button>
    </div>
</form>

<?php require "footer.php"?>



