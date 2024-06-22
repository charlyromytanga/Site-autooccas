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
                            <div class="card-footer text-body-secondary">
                                    "La voiture qui grandit avec vous.”
                            </div>
                        </div>
                        <div class="carousel-item">
              
                                <picture class="">
                                    <img src="./etudiant.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary">
                                “Votre partenaire pour les aventures estudiantines.”
                            </div>
                        </div>
                        <div class="carousel-item">
            
                                <picture class="">
                                    <img src="./cadre.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary">
                                “Conduisez avec style et confiance.”
                            </div>
                        </div>
                        <div class="carousel-item">
          
                                <picture class="">
                                    <img src="./retraite.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary">
                                “Profitez de la route en toute sérénité.”
                            </div>
                        </div>
                        <div class="carousel-item">
         
                                <picture class="">
                                    <img src="./utilitaire.png" class="im-fluid" alt="voiture1">
                                </picture>

                            <div class="card-footer text-body-secondary">
                                “Robuste et fiable, comme votre travail.”
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually">Next</span>
                        </button>

                    </div>
                </div>

            </div>
                <div class="col-sm-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
