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
    echo '<p>Vous êtes connecté</p>';
    if ($_SESSION["auth"]!=="ok"){
        header ("location: login_form.php");
        exit();
    }
    ?>
</body>
</html>