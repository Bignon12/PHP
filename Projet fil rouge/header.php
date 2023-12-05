<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $title;?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
    <div class="d-flex align-items-center">
        <img src="images_the_district/the_district_brand/logo.png" class="img1" alt="logo" width="120" height="120">

        <nav class="navbar-expand-lg">
            <div class="container-fluid" id="flex2">
                <div class="d-flex justify-content-around" id="navbarSupportedContent">
                    <div class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link active" aria-current="page" href="categorie.php">Catégories</a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link active" aria-current="page" href="plat.php">Plats</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="re">
        
    <div class="search-bar">
        <input class="search-input" id="searchInput" type="text" placeholder="Rechercher">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="search-button" id="searchButton" type="submit">Rechercher</button>
        </div>
    </div>
    </header>
</body>
</html>