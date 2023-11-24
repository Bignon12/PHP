<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire upload</title>
</head>
<body>
    <form action = "formupload.php" method = "post" enctype = "multipart/form-data">
        <input type = "file" name = "essai.txt">
    </form>

    <?php
        var_dump($_FILES);
    ?>
</body>
</html>