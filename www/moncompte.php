<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autooccas.fr</title>

    <!-- Bootstrap  CSS online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Bootstrap js online -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

     <header>
        <nav class="navbar navbar-expand-lg nav-pills" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div class="container-fluid">
                    <a class="navbar-brand mr-0 mr-md-2" href="/">
                        <img src="./logo.png" class="img-fluid" alt="logo" width="163" height="33">
                    </a>
                </div>
            </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav" style="display: flex; justify-content: space-between; column-gap: 40px;">
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link" href="index.php">Acceuil</a>
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
                            <a class="nav-link active" href="./moncompte.php">Mon compte</a>
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

    <div class="container-fluid">
        <div class="row">
            <!-- Section d'illustration -->
            <div class="col-md-auto p-5"><img src="./connexion.png" alt="connexion" class="img-fluid"></div>
            <!-- Section de connexion -->
            <div class="col-md-6  text-black custom-bg">
                <div class="card text-center">
                    <div class="card-header"><h2><span>Se connecter</span></h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="forme-control" id="email"
                                placeholder="exemple@domaine.fr">                    
                            </div>
                        </form>
                        <div class="from-group">
                            <label for="motdepasse">Mot de passe</label>
                            <input type="motdepasse" class="form-control" id="motdepasse">
                            <button type="submit" class="btn btn-primary">connexion</button>
                            <p class="mt-3"><a href="#" class="text-white">Mot de passe oublié?</a></p>
                        </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Bienvenue
                    </div>
                </div>
            </div>
        </div>
    </div>


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