<?php $title = "Les commandes";?>
<?php require "header.php";?>

    <div>
        <h1 class="text-center" ;>Veuillez faire vos commandes</h1>
    </div>
    <div class="d-flex justify-content-evenly">


        <div class="card" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="images_the_district/menu-pizza.jpg" class="img-fluid rounded-start" alt="Sandwich"
                        width="250" height="250">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="card-title">Menu-pizza</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, bchjbsdqfxgcdshqcgs
                            hcdsbfhjdqsgchjcs dhugfdshgcbnsb fbdsqjhgze adipisicing elit. Ipsa hic nobis maiores
                            repellendus, ipsam veniam sed pariatur inventore impedit harum quas praesentium porro.
                            Dolores, natus nisi. At quaerat error sapiente..</p>
                        <div class="d-flex justify-content-around">
                            <button type="button" class="btn btn-primary">Quantité</button>
                            <button type="button" class="btn btn-dark">1</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <form class="d-flex justify-content-left col-12">
            <div class="form-group m-2 col-6">
                <label for="nom" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Nom*</label>
                <input type="text" class="form-control m" id="nom">
                <div class="alert alert-danger alert-dismissible fade show" id="msg1"  role="alert">
                    <strong>Ce champ est obligatoire</strong> 
                  </div>
            </div>
    
            <div class="form-group m-2 col-6">
                <label for="prenom"
                    style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Prénoms*</label>
                <input type="text" class="form-control" id="prenom">
                <div class="alert alert-danger alert-dismissible fade show" id="msg2"  role="alert">
                    <strong>Ce champ est obligatoire</strong> 
                  </div>
               </div>
        </form>
    </div>
    <div>
        <form class="d-flex justify-content-left col-12">
            <div class="form-group m-2 col-6">
                <label for="nom" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Email*</label>
                <input type="text" class="form-control m" id="email">
                <div class="alert alert-danger alert-dismissible fade show" id="msg3"  role="alert">
                    <strong>Ce champ est obligatoire</strong> 
                  </div>
            </div>
    
            <div class="form-group m-2 col-6">
                <label for="prenom"
                    style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Téléphone*</label>
                <input type="text" class="form-control" id="tel">
                <div class="alert alert-danger alert-dismissible fade show" id="msg4"  role="alert">
                    <strong>Ce champ est obligatoire</strong> 
                  </div>
               </div>
        </form>
    </div>
            <div class="form-group">
                <label for="nom" style="font-family: 'Trebuchet MS', sans-serif; font-size: 25px;">Adresse*</label>
                <textarea type="text" class="form-control" col="3" id="adr"></textarea>
                <div class="alert alert-danger alert-dismissible fade show" id="msg5"  role="alert">
                    <strong>Ce champ est obligatoire</strong> 
                </div>
            </div>
        </div>
    </div>

        <div class="d-flex justify-content-evenly">
            <button id ="btn" type="button" class="btn btn-primary btn-lg">Envoyer</button>
        </div>

    <?php require "footer.php";?>

