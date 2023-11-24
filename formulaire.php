<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    <title>Formulaire Jarditou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/style.css">

</head>


<body>
    <div class="container" >

    <header>
        <div class="d-flex justify-content-between">
            <img src="Assets/img/jarditou_logo.jpg" title="Logo jarditou" alt="logo jarditou" class="w-25 img-fluid">
            <span>Tout le jardin</span>
        </div>
    </header>
  
    <nav class="navbar navbar-expand-lg bg-body-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Jarditou.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tableau.html">Tableau</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
    <img src="Assets/img/promotion.jpg" title="image entete" alt="image entete" class="img-fluid">
    </div>
    <div class="container">
        <p style="font-size: 2rem; color: red;">*Ces zones sont obligatoires</p>
        <h2>Vos Coordonnées</h2>
        
        <form action = "form.php" method = "post" class=" ">            
          <div class="form-group">
              <label for="nom" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Nom*</label>
              <input type="text" class="form-control"  name = "nom">
              <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes1">
                <strong>Ce champ est obligatoire!</strong>
              </div>
          </div>
          <div class="form-group">
              <label for="prenom" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Prénoms*</label>
              <input type="text" class="form-control custom-size" id="prenom" name = "prenom">
              <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes2">
                <strong>Ce champ est obligatoire!</strong>
              </div>
          </div>
          <div class="form-group">
              <label for="sexe" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">sexe*</label>
          </div>
          <div class="d-flex">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label mx-2" for="flexRadioDefault1" style="font-family: 'Trebuchet MS', sans-serif; font-size: 20px">Féminin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label mx-2" for="flexRadioDefault2" style="font-family: 'Trebuchet MS', sans-serif; font-size: 20px">Masculin</label>
            </div>
          </div>
          <div class="form-group">
            <label for="datedenaissance" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Date de naissance*</label>
            <input type="date" class="form-control" id="ddn">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes3">
              <strong>Ce champ est obligatoire!</strong>
            </div>
          </div>
          <div class="form-group">
            <label for="codepostal" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Code Postal*</label>
            <input type="text" class="form-control" id="cp">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes4">
              <strong>Ce champ est obligatoire!</strong>
            </div>
          </div>
          <div class="form-group">
            <label for="adresse" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Adresse</label>
            <input type="text" class="form-control" id="adresse">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes5">
              <strong>Ce champ est obligatoire!</strong>
            </div>
          </div>
          <div class="form-group">
            <label for="ville" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Ville</label>
            <input type="text" class="form-control" id="vil">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes6">
              <strong>Ce champ est obligatoire!</strong>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" style="font-family: 'Trebuchet MS', sans-serif; font-size: 30px"class="form-label">Email*</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="dave.loper@afpa.fr">
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="mes7">
              <strong>Ce champ est obligatoire!</strong>
            </div>
          </div>
        </form>
        <h2>Votre demande</h2>
        <form>
          <div class="form-group">
            <label for="sujet" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Sujet</label>
            <select class="form-select" aria-label="Default select example">
              <option selected disabled>Veuillez sélectionner un sujet</option>
              <option value="1">Mes commandes</option>
              <option value="2">Question sur un produit</option>
              <option value="3">Réclamation</option>
              <option value="4">Autres</option>
            </select>
          </div>
          <div class="form-group">
            <label for="question" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">Votre question*</label>
            <div class="form-floating">
              <textarea class="form-control" id="floatingTextarea2" style="height: 50px"></textarea>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px">
             J'accepte le traitement informatique de ce formulaire
            </label>
          </div>
   
        <button type="submit" id="btn" class="btn btn-dark btn-lg">Envoyer</button>
        <button type="reset" class="btn btn-dark btn-lg">Refuser</button>
      </form>
    </div>
    <footer class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid border border-secondary bg-dark">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Mentions légales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Horaires</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Plan de sîte</a>
                  </li>
                </ul>
              </div>
            </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="Assets/js/jquery.js"></script>


</body>
</html>