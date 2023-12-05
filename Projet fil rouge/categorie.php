<?php $title = "Les catégories";?>
<?php require "header.php";?>

        <div>
            <h1 class="text-center">Voici les différentes catégories de plats que nous vous proposons!</h1>
        </div>

        <div id="results" class="d-flex flex-wrap justify-content-around"></div>

        <div id="cac">

    <div class="bloc">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 1</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats africains</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 2</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats Européens</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>


            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 3</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats Asiatiques</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bloc3 d-flex justify-content-evenly">
        <img src="images_the_district/menu-burger.jpg" alt="fff" width="200" height="200">
        <img src="images_the_district/menu-pizza.jpg" alt="fff" width="200" height="200">
    </div>

    <div class="bloc2 ">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 4</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats africains</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 5</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats Européens</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>

            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">Catégorie 6</h3>
                    <p style="font-size: 20px;">Ici, vous avez les plats Asiatiques</p>
                    <a href="#" class="btn btn-primary">Allons-y</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="categorie.js"></script>

        <?php require "footer.php";?>
