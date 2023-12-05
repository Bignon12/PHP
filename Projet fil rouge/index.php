
<?php $title = "Page d'accueil";?>
<?php require "header.php"?>


<body>
   
     <div>
        <h1 class="text-center" ;>Bienvenue! Veuillez choisir votre catégorie de plats</h1>
    </div>
   
    <div id="results" class="d-flex flex-wrap justify-content-around"></div>

    <div id="cacher">
        
    <div class="d-flex justify-content-around mt-3">           
        <a href="categorie.php" class="btn btn-light btn-lg zoom col-5 col-md-1 btns">Suivant</a>
    </div>

    <div class="bloc">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 1</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 2</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>


            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 3</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bloc2 ">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 4</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 5</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 6</h3>
                    <p style="font-size: 20px;">Ici, vous avez les catégories de plats</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bloc3 d-flex justify-content-evenly">
        <img src="images_the_district/food/buffalo-chicken.webp" alt="fff" width="200" height="200">
        <img src="images_the_district/food/lasagnes_viande.jpg" alt="fff" width="200" height="200">
    </div> 
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js"></script>

<?php require "footer.php" ?>
