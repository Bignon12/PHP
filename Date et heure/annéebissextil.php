<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année B</title>
</head>
<body>
    <?php
          //Comment déterminer si une année est bissextile ?
          function estBissextile($annee) {
            // Si l'année est divisible par 4
            if ($annee % 4 == 0) {
                // Si l'année est divisible par 100
                if ($annee % 100 == 0) {
                    // Si l'année est divisible par 400
                    if ($annee % 400 == 0) {
                        return true; // Année bissextile
                    } else {
                        return false; // Année non bissextile
                    }
                } else {
                    return true; // Année bissextile
                }
            } else {
                return false; // Année non bissextile
            }
        }
        
        // Exemple d'utilisation
        $annee = 2023;
        
        if (estBissextile($annee)) {
            echo "$annee est une année bissextile.";
        } else {
            echo "$annee n'est pas une année bissextile.";
        }
    ?>
</body>
</html>