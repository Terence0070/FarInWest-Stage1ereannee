<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

        <!-- Header -->
        <header class="bg-warning bg-gradient text-dark">
            <div id="presentation" class="container px-4 text-center">
                <img class=img-fluid style="width:240px;" src="/images/Site_Construction.jpg">
                <h1 class="display-5 text-danger fw-bolder">Site web en construction !!!</h1>
                <h1 class="display-2 fw-bolder">Bienvenue à FarInWest !</h1>
                <p class="lead display-3">Apprenez à danser !</p>
            </div>
        </header>

            <!-- Section des danses-->
            <div id="danse" class="mt-n3">
            <div id="Carousel_Danse" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicateurs -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="2" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#Carousel_Danse" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
              
                <!-- Contenu du carrousel -->
                <div class="pb-3 carousel-inner">
                <div class="carousel-item active">
                    <div class="gradient-overlay"></div>
                    <img src="images/groupe_de_danse.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Salsa">
                    <div class="container">
                    <div class="carousel-caption text-start">
                        <h2 class="display-2">Salsa (CUBAINE)</h2>
                        <p>Une danse énergétique et sensuelle</p>
                        <p><a class="btn btn-lg btn-warning" href="danses/salsa.php">Plus de détails sur la Salsa</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="images/bachata_dancers.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Bachata">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2 class="display-2">Bachata (REP.DOM)</h2>
                        <p>Une danse sensuelle et émotionnelle</p>
                        <p><a class="btn btn-lg btn-warning" href="danses/bachata.php">Plus de détails sur la Bachata</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="images/wcs_dancers.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Bachata">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2 class="display-2">West Coast Swing (CALIFORNIE, USA)</h2>
                        <p>Une danse élégante et fluide</p>
                        <p><a class="btn btn-lg btn-warning" href="danses/wcs.php">Plus de détails sur la WCS</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="images/salsa_dancers.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Cours_Particuliers">
                    <div class="container">
                    <div class="carousel-caption text-end">
                        <h2 class="display-2">Les cours particuliers</h2>
                        <p>Cours particuliers.</p>
                        <p><a class="btn btn-lg btn-warning" href="/tarifs.php">Voir les tarifs</a></p>
                        <!-- <p><a class="btn btn-lg btn-warning" href="/index#horaires">Voir les horaires</a></p> -->
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="images/contact_image.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Contact">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2 class="display-2">Besoin de nous contacter ?</h2>
                        <p>Il suffit de remplir le formulaire sur cette page.</p>
                        <p><a class="btn btn-lg btn-warning" href="/contact.php">Aller à la page du formulaire</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="images/couple_de_danseurs.jpg" class="d-block img-fluid mx-auto carousel-image" alt="Merci">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2 class="display-2">Merci de votre visite !</h2>
                        <p>FarInWest vous souhaite une bonne visite sur son site.</p>
                    </div>
                    </div>
                </div>
                </div>
              
                <!-- Contrôles du carrousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#Carousel_Danse" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#Carousel_Danse" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Suivant</span>
                </button>
              </div>
              <div class="container">
                <h2 class="fw-bold text-center p-3 display-5"><a href=danses.php>Voir les danses proposées</a></h2>
                <hr class="my-4 border-top border-dark">
              </div>
            </div>
        <!-- Section de l'équipe-->
        <section id="equipe">
            <div class="container">
                <div class="row g-2 justify-content-around">
                    <h1 class="display-3 text-center fw-bold text-uppercase mb-3">équipe</h1>
                    <div class="col-lg-4 col-md-6 col-sm-9 border p-3">
                        <h3 class="text-center fw-bold">Thomas Sculfort</h3>
                        <div class="text-center">
                        <img src="images/sculfort_thomas.png" alt="Thomas Sculfort" class="photo_personne center-block rounded-circle w-70 p-3">
                        </div>
                        <p class="text-center lead">Thomas, informaticien de métier, pratique les arts martiaux jusqu’à 21 ans. Lorsqu’il découvre les danses latines (salsa cubaine / bachata), c’est une vraie révélation et naturellement, il s’y investit. Plus récemment il découvre le WCS, une danse complètement fun à plusieurs dimensions qui le passionne énormément et lui donne envie de tout vous transmettre.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 border p-3">
                        <h3 class="text-center fw-bold">Marianne Constancias</h3>
                        <div class="text-center">
                            <img src="images/avatar_homme.png" alt="Photo de la personne" class="photo_personne center-block w-70 p-3">
                        </div>
                        <p class="text-center lead">Mini-description de la personne.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 border p-3">
                        <h3 class="text-center fw-bold">Nom de la personne</h3>
                        <div class="text-center">
                            <img src="images/avatar_homme.png" alt="Photo de la personne" class="photo_personne center-block w-70 p-3">
                        </div>
                        <p class="text-center lead">Mini-description de la personne.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 border p-3">
                        <h3 class="text-center fw-bold">Nom de la personne</h3>
                        <div class="text-center">
                            <img src="images/avatar_homme.png" alt="Photo de la personne" class="photo_personne center-block w-70 p-3">
                        </div>
                        <p class="text-center lead">Mini-description de la personne.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 border p-3">
                        <h3 class="text-center fw-bold">Nom de la personne</h3>
                        <div class="text-center">
                            <img src="images/avatar_homme.png" alt="Photo de la personne" class="photo_personne center-block w-70 p-3">
                        </div>
                        <p class="text-center lead">Mini-description de la personne.</p>
                    </div>
                    <div class="container">
                        <h2 class="fw-bold text-center p-3 display-5"><a href=/association.php>En savoir plus sur l'association</a></h2>
                    </div>
                </div>
                <!-- <hr class="my-4 border-top border-dark"> -->
            </div>
          </section>
          
        <!-- Section de contact
        <section id="horaires">
            <div class="container">
                <div class="row g-2 justify-content-center">
                    <h1 class="display-3 text-center fw-bold text-uppercase mb-3">Planning</h1>
                    <div class="col-lg-12">
                        <p class="lead">(Là où on mettre le planning pour chaque semaine)</p>
                    </div>
                </div>
            </div>
        </section> -->

<?php 
  require_once(__DIR__ . "/menu/footer.php");
?>