<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autooccas.fr</title>

    <!-- Bootstrap  CSS online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--Bootstrap js online -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../scr/javascript/fonctions.js" defer></script>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg nav-pills" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div class="container-fluid">
                    <a class="navbar-brand mr-0 mr-md-2" href="./index.php">
                        <img src="./logo.png" class="img-fluid" alt="logo" width="163" height="33">
                    </a>
                </div>
            </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav" style="display: flex; justify-content: space-between; column-gap: 40px;">
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link active" href="index.php">Acceuil</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="./acheter.php">Acheter</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="./estimerunevoiture.php">Estimer une voiture</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="./vendre.php">Vendre</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Recherche</button>
                            </form>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="./moncompte.php">Mon compte</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="./FAQ.php">FAQ</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="https://github.com/charlyromytanga/Site-autooccas.git" target="_blank" rel="noopener">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <section id="contenu-principal">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-8 card text-center">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <picture class="">
                                <img src="./famille.png" class="im-fluid" alt="voiture1">
                            </picture>
                            <div class="card-footer text-body-secondary" style="background-color: #e3f2fd;">
                                    "La voiture qui grandit avec vous.”
                            </div>
                        </div>
                        <div class="carousel-item">
              
                                <picture class="">
                                    <img src="./etudiant.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary" style="background-color: #e3f2fd;">
                                “Votre partenaire pour les aventures estudiantines.”
                            </div>
                        </div>
                        <div class="carousel-item">
            
                                <picture class="">
                                    <img src="./cadre.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary" style="background-color: #e3f2fd;">
                                “Conduisez avec style et confiance.”
                            </div>
                        </div>
                        <div class="carousel-item">
          
                                <picture class="">
                                    <img src="./retraite.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary" style="background-color: #e3f2fd;">
                                “Profitez de la route en toute sérénité.”
                            </div>
                        </div>
                        <div class="carousel-item">
         
                                <picture class="">
                                    <img src="./utilitaire.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary" style="background-color: #e3f2fd;">
                                “Robuste et fiable, comme votre travail.”
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>

            </div>
                <div class="col-sm-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Un témoignage d'une famille : 
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Pour une famille nombreuse comme la notre,</strong> “Nous avons opté pour un monospace d’occasion pour notre famille nombreuse. 
                                    Le grand coffre et les portes coulissantes sont très pratiques pour les enfants. Nous avons trouvé un modèle avec peu de kilomètres, 
                                    ce qui nous a rassurés.”
                                    “La voiture familiale d’occasion que nous avons choisie nous permet de partir en vacances avec tout le nécessaire pour nos trois enfants. 
                                    C’est un excellent compromis entre espace et budget.”

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Un témoignage d'une étudiante : 
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>“En tant qu’étudiante,</strong> j’ai cherché une petite voiture d’occasion économique. J’ai trouvé une citadine avec un faible kilométrage 
                                    et un bon rapport qualité-prix. Elle me permet de me déplacer facilement en ville.”
                                     “Mon premier achat de voiture en tant qu’étudiant s’est bien passé. J’ai choisi une compacte d’occasion avec une faible consommation de carburant. 
                                     Cela me permet de me rendre à l’université sans soucis.”
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               Un témoignage d'une collaboratrice : 
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>“En tant que cadre,</strong> j’ai investi dans une berline haut de gamme d’occasion. La voiture était en excellent état et 
                                    offrait un confort exceptionnel. Je suis très satisfait de mon choix.”
                                    “Ma voiture d’occasion m’aide à me déplacer professionnellement. J’ai opté pour une berline allemande avec des équipements de luxe. 
                                    C’est un excellent investissement.”


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Un témoignage d'un retraité : 
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>“Après ma retraite,</strong> j’ai choisi une voiture d’occasion avec peu de kilomètres. Je privilégie le confort et la sécurité. 
                                    C’est agréable de pouvoir voyager sans contraintes.”
                                    “La voiture d’occasion que j’ai achetée me permet de profiter de ma retraite en toute tranquillité. J’ai opté pour un modèle fiable et spacieux.”

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                               Un témoignage d'un artisant : 
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>J’ai trouvé une camionnette d’occasion en bon état.</strong> “En tant qu’artisan, j’ai besoin d’un véhicule pratique pour transporter mes outils. 
                                    Elle répond parfaitement à mes besoins professionnels.” 
                                    “Mon utilitaire d’occasion est mon outil de travail au quotidien. J’ai choisi un modèle robuste avec un grand espace de chargement. 
                                    C’est essentiel pour mon activité.”


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Astuce n°1</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Kilométrage parcouru</h5>
                            <p class="card-text">
                                Plus une voiture a parcouru de kilomètres, plus sa valeur diminue. 
                                Un kilométrage élevé indique généralement une usure plus importante
                            </p>
                        </div>  
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card text-center">
                        <div class="card-header">
                            Effectuer une recherche
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col">
                                    <select id="inputState" class="form-select">
                                        <option selected>Marque...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="inputState" class="form-select">
                                        <option selected>Model...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="inputState" class="form-select">
                                        <option selected>Etat...</option>
                                        <option>Parfait état</option>
                                        <option>Frais à prévoir</option>
                                        <option>Passage au garage recommandé</option>
                                    </select>
                                </div>
                            </div>
                            <label for="priceRange" class="form-label">Prix :</label>
                            <input type="range" class="form-range" id="priceRange" min="0" max="100000" step="10" oninput="updatePriceValue()">
                            <p id="priceValue">0 €</p>
                            <a href="#" class="btn btn-primary">Lancer la recherche</a>

                        </div>
                        </div>
                    </div>
                <div class="col-sm-2">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Astuce n°2</div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Dépréciation annuelle</h5>
                                <p class="card-text">
                                    Pour évaluer la valeur d’une voiture, 
                                    vous pouvez utiliser des outils tels que la cote Argus ou d’autres références du marché3
                                </p>
                            </div>  
                        </div>
                    </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">col-sm</div>
                <div class="col-sm">col-sm</div>
                <div class="col-sm">col-sm</div>
            </div>
        </div>
    </section>

    <footer>
        <nav  class="navbar navbar-expand-lg nav-pills" style="background-color: rgb(10, 30, 69)">
            <div class="container-fluid text-center">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <ul>
                            <li>
                                <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Vendre une voiture</span>
                            </li>
                            <li>
                            <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Guide du vendeur</span> 
                            </li>
                        </ul>                        
                    </div>
                    <div class="col-md-auto">
                        <ul>
                            <li>
                                <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Acheter une voiture</span>
                            </li>
                            <li>
                            <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Guide d'achat</span> 
                            </li>
                        </ul>                      
                    </div>
                    <div class="col-md-auto">
                        <ul>
                            <li>
                                <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">À Propos</span>
                            </li>
                            <li>
                            <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Qui sommes-nous?</span> 
                            </li>
                        </ul>                     
                    </div>
                    <div class="col-md-auto">
                        <ul>
                            <li>
                                <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Contact</span>
                            </li>
                            <li>
                            <span class="no-underline text-white hover:text-white hover:underline text-sm leading-tight">Nous suivre sur </span> 
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-auto justify-content-lg-end">
                        <ul>
                            <li>
                                <span>
                                    <a class="no-underline text-white hover:text-white hover:underline text-sm leading-tight" href="/legal/conditions-generales-utilisation">Mentions Légales</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <a class="no-underline text-white hover:text-white hover:underline text-sm leading-tight" href="/legal/conditions-generales-utilisation">Confidentialité</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </footer>


</body>
</html>
