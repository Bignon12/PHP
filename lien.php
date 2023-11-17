<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>
    <?php
    function liencree(){
        $lien = "http://www.reddit.com/";
        $titre = "Reddit Hub";
        echo ("<a href= " .$lien. ">" .$titre. "</a>");
    }
    liencree($lien, $titre);

    ?>
</body>
</html>