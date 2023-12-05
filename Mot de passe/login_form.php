<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
</head>
<body>
    <form action = "login_script.php" method = "post">
        <label for = "nom">Nom</label>
            <input type = "text" name = "nom"><br><br>
        <label for = "prenom">Prénom</label>
            <input type = "text" name = "prenom"><br><br>
        <label for = "email">Email</label>
            <input type = "text" name = "email"><br><br>
        <label for = "mp1">Mot de passe</label>
            <input type = "password" name = "mp1"><br><br>
        <label for = "mp2">Confirmer mot de passe</label>
            <input type = "password" name = "mp2"><br><br>
        <button type = "submit" name = "btn">Se connecter</button>
    </form>
</body>
</html>