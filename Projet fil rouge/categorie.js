$(document).ready(function () {
    var searchInput = $("#searchInput");
    var searchButton = $("#searchButton");
    var results = $("#results");
   

    searchButton.click(function () {
        $.getJSON("the_district.json", function (data) {
            var saisi = searchInput.val();
            var categories = data.categorie; 
            console.log(categories);
            var filtreCategories = categories.filter(function (filtre) {
                return filtre.libelle.toLowerCase().includes(saisi.toLowerCase());
            });

            afficher(filtreCategories);

            function afficher(filtreCategories) {
                if (saisi.length === 0) {
                    cache = $("#cac");
                    cache.hide();
                    results.html("Veuillez saisir un nom de carégorie");
                   
                } else {
                    cache.hide();
                    $.each(filtreCategories, function (indice, categorie) {
                        var html = `
                            <div class="row col-2 m-4">
                                <div class="card" style="width: 25%; margin: 0 1%;">
                                    <img src="images_the_district/food/${categorie.image}" class="img-fluid cover rounded-start" alt="image categorie">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">${categorie.libelle}</h3>
                                        <p>${categorie.description}</p>
                                        <p>${categorie.prix}€</p>
                                        <a href="commande.php" role="button" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>
                            </div>
                        `;

                        results.append(html);
                    });
                }
            }
        });
    });
});





// $(document).ready(function(){
//     var searchInput = $("#searchInput");
//     var searchButton = $("#searchButton");
//     var results = $("#results");
    
//     searchButton.click(function(){
//     $.getJSON("the_district.json" , function(data){
//         var saisi = searchInput.val();
//         var cat = data.categorie;
//         var filtreCategories=categorie.filter(function(filtre){
//             return filtre.libelle.toLowerCase().includes(saisi.toLowerCase());
              
//             })
//             afficher(filtreCategories);
//             function afficher(filtreCategories){
//                 if (saisi.length === 0)
//                 {
//                     cache = $("#cat")
//                     cache.hide();
//                     results.html("Veuillez saisir un nom de catégorie")
//                 }
//                 else
//                 {
//                     cache = $("#cat")
//                     cache.hide();
//                     $.each(filtreCategories, function(indice, categorie)
//                     {
                        
//                         var html = `
//                         <div class= "row col-2 m-4" >
//                         <div class="card" style="w-25 mx-1;">
//                             <img src="images_the_district/food/${categorie.image}" class="img-fluid cover rounded-start" alt="image categorie">
//                             <div class="card-body">
//                                 <h3 class="card-title text-center">${categorie.libelle}</h3>
//                                 <p>${categorie.description}</p>
//                                 <p>${categorie.prix}€</p>
//                                 <a href = "commande.php" role="button" button type="submit" name = "commander" class="btn btn-primary">Commander</a>
//                             </div>
//                         </div>
//                     </div>
//                         ` 

//                     results.append(html);
//                     })
//                 }
          
//             }
//         });
//         results.empty();  
//     });
// })



// $(document).ready(function(){
//     $.getJSON("the_district.json", function(data){
//         var affiche = $("#cat");
//         var donnee = data.categorie;
      
//         for (var i=0; i<donnee.length; i++){
//             var cat = donnee[i];
//             console.log(cat);
//             var affichage = `
            
//             <div class= "row col-2 m-5" >
//             <div class="card" style="width: 25rem;">
//                 <img src="images_the_district/category/${cat.image}" class="img-fluid cover rounded-start" alt="image categorie">
//                 <div class="card-body">
//                     <h3 class="card-title text-center">${cat.libelle}</h3>
//                     <p>${cat.description}</p>
//                     <button type="button" class="btn btn-primary">Commander</button>
//                 </div>
//             </div>
//         </div>      
//             `
//             affiche.append(affichage);
//         }
//     })
//     });