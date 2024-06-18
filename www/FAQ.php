<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autooccas.fr</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var questions = document.querySelectorAll('.faq-question');
            questions.forEach(function(question) {
                question.addEventListener('click', function() {
                    var answer = this.nextElementSibling;
                    if (answer.style.display === "block") {
                        answer.style.display = "none";
                    } else {
                        answer.style.display = "block";
                    }
                });
            });
        });
    </script>
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
                            <a class="nav-link" href="./moncompte.php">Mon compte</a>
                        </li>
                        <li class="nav-item col-8 col-lg-auto">
                            <a class="nav-link active" href="./FAQ.php">FAQ</a>
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

    <section>
    <div class="faq-container">
        <?php
            $questions = [
                "Comment est calculé le prix d'estimation de ma voiture ?" => <<<EOT
Le prix de vente de votre véhicule est calculé à partir des informations que vous déclarez dans notre demande d'estimation qui déterminent l’équipement et l’état d’usure de votre véhicule.

Nous analysons ensuite les ventes des véhicules similaires auprès des professionnels et des sites d’annonces de véhicules d’occasion dans votre région.
EOT,
                "Puis-je annuler mon rendez-vous de mise en vente ?" => <<<EOT
Vous avez programmé un RDV de mise en vente mais vous avez un empêchement …

Vous pouvez annuler votre rendez-vous depuis votre espace client jusqu’à 24h avant celui-ci.

Passé ce délai, merci de contacter un conseiller au 01 76 42 01 20.
EOT,
                "Suis-je obligé d'accepter une offre ?" => <<<EOT
Une offre est une opportunité de vente immédiate.

Vous avez la possibilité d'accepter ou de refuser librement les offres à partir de votre espace client et sans avoir besoin de contacter l'acheteur ! Vous gardez la main sur le prix de vente de votre véhicule : vous pouvez aussi formuler une contre-offre à l'acheteur, qui sera lui aussi libre de l'accepter ou de vous proposer une nouvelle offre.
EOT,
                "Est-ce que je reçois toutes les offres ?" => <<<EOT
Le vendeur ne reçoit que les offres les plus intéressantes.

Votre conseiller CapCar s’assure du sérieux de l’offre reçue avant de vous la soumettre.

En effet, nous faisons le filtre pour ne vous notifier que lorsqu'une offre pertinente vous est soumise par un client acheteur !
EOT,
                "Comment prendre un rendez-vous de mise en vente ?" => <<<EOT
Vous pouvez prendre votre rendez-vous depuis votre espace client. À partir de la section « Projet de vente », vous retrouverez votre véhicule avec la mention « À inspecter ».

Lorsque vous cliquez sur celui-ci, vous aurez la possibilité de saisir vos créneaux de disponibilités !

Si vous n’avez pas encore fait votre demande d’estimation cliquez ici ! Vous pourrez ensuite prendre rendez-vous depuis votre espace client.

Notre équipe de conseillers reste disponible pour répondre à vos questions au 01 76 42 01 20.
EOT,
                "J'ai réservé un véhicule mais j'ai changé d'avis." => <<<EOT
Vous pouvez annuler votre réservation en prenant contact avec l’un de nos conseillers. En cas d’annulation, vous serez remboursé de l’intégralité des frais versés à la réservation.

Attention : en annulant votre réservation, la voiture sera remise en vente sur notre site et un autre acheteur pourra la réserver.

Si vous souhaitez annuler votre réservation, contactez votre Agent, il vous accompagnera dans votre démarche.
EOT,
                "Pourquoi mon offre a expiré ?" => <<<EOT
Sans réponse de la part du vendeur, votre offre expire 48 heures après avoir été proposée.

Si elle est refusée, c'est peut-être parce que le vendeur l’estime sans doute trop basse.

Si le véhicule est réservé par un autre acheteur pendant que vous avez proposé une offre, toutes les offres en cours sont suspendues.

En revanche, elles peuvent reprendre si la réservation n'est pas concluante et que la voiture est remise en ligne !
EOT,
                "Combien de temps est valable mon offre ?" => <<<EOT
Une fois que vous avez formulé votre offre : le vendeur dispose d'un délai de 48 heures pour valider toute offre qu'il reçoit.

Si le vendeur accepte votre offre, bonne nouvelle : vous pouvez réserver la voiture et acheter votre nouveau bolide !

Si le vendeur n'a pas accepté votre offre, celle-ci n'est plus valable.
EOT,
                "Comment se déroule une transaction ?" => <<<EOT
1: Vérification de l’état du véhicule par l’inspecteur

Suite au rendez-vous convenu avec le vendeur et l’inspecteur. Ce dernier s’assurera de la conformité de tous les documents et de l'état du véhicule (contrôle technique, travaux effectués...).

2 : Test du véhicule

Vous réaliserez un essai routier du véhicule .

3 : Signature de la vente et paiement du véhicule

Vous souhaitez conclure la vente !

Si vous avez choisi le paiement par portefeuille en ligne, aucune action n’est nécessaire de votre part. L’inspecteur se charge de réaliser le virement sur le compte du vendeur.

Si vous avez choisi le paiement par chèque de banque, venez muni de celui-ci, il sera donné au vendeur à ce moment.

Si l’acheteur ne souhaite finalement pas acquérir le véhicule, il lui sera restitué l’intégralité des fonds versés sur son compte.
EOT,
                "Comment se passe la reprise de votre véhicule ?" => <<<EOT
CapCar propose la reprise simple de votre véhicule, sur le lieu de votre choix, en 24h et au meilleur prix !

La reprise CapCar en 3 étapes :

1 - Nous déterminons par téléphone le prix de reprise de votre véhicule et un RDV sur le lieu de votre choix.

2 - Un représentant CapCar se rend au rendez vous pour confirmer le prix et formaliser la cession.

3 - Notre représentant repart avec votre véhicule et nous réalisons votre règlement par virement dans les 24 heures.
EOT
            ];

            foreach ($questions as $question => $answer) {
                echo "<div class='faq-question'>$question</div>";
                echo "<div class='faq-answer'>$answer</div>";
            }
        ?>
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
