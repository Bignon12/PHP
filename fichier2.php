<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier</title>
</head>
<body>
    <h2> TABLEAU </>
    <?php
    $filename = file ("customers.csv");
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Prénom</th>';
    echo '<th>Nom</th>';
    echo '<th>Email</th>';
    echo '<th>Téléphone</th>';
    echo '<th>Ville</th>';
    echo '<th>Etat</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($filename as $k =>$ligne){
        $filename[$k] = explode (",", $ligne);
        echo '<tr>';
        foreach ($filename[$k] as $item) {
            echo '<td>' . $item . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    ?>
</body>
</html>