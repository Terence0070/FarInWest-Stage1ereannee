<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

        <!-- Header -->
        <header class="bg-warning bg-gradient text-dark">
          <div id="debut" class="container px-4 text-center">
            <h1 class="display-3 text-center fw-bold text-uppercase mb-3 mt-4">Sondages</h1>
          </div>
        </header>

<!-- Partie "Sondages en cours" -->

<div class="bg-success-light">
  <div class="container">
    <div class="row">
      <h2 class="text-center text-success display-3 fw-bold">Sondages en cours</h2>
        <p class="lead text-center display-6">Cette partie regroupe les <b>derniers sondages ouverts</b>, cliquez sur le(s) lien(s) et utilisez le mot de passe qui vous a été fourni.</b></p>
    </div>
    <hr class="my-4 border-top border-dark">
  </div>

    <!-- METTEZ LES NOUVEAUX SONDAGES EN DESSOUS DE CE COMMENTAIRE (de préférence, faites en sortes que les sondages les plus "récents" soient en haut et descendent progressivement en bas) -->

  <div class="container">
    <div class="row">
      <h2 class="text-center display-5">Sondage de la semaine du <span class="text-success fw-bold">22/06/2023</span> au <span class="text-success fw-bold">29/06/2023</span></h2>
      <p class="lead text-center center display-6"><b>SUJET :</b> Cours du 22/05/2023</p>
      <h4 class="text-center"><a class="btn btn-warning fw-bold" target="_blank" href="https://framadate.org/dZr9W4t4KYaViCxZ">Participer au sondage</a></h4>
    </div>
    <hr class="my-4 border-top border-dark">
  </div>


  <div class="container">
    <div class="row">
      <h2 class="text-center display-5">Sondage de la semaine du <span class="text-success fw-bold">14/06/2023</span> au <span class="text-success fw-bold">21/06/2023</span></h2>
      <p class="lead text-center center display-6"><b>SUJET :</b> Rattrapage Salsa Cours &plus; Pratiqu</p>
      <h4 class="text-center"><a class="btn btn-warning fw-bold" target="_blank" href="https://framadate.org/EYdlAgHaL1jV84t1">Participer au sondage</a></h4>
    </div>
    <hr class="mb-0 border-dark custom-separator"> <!-- Ce séparateur là est plus grand dû fait qu'il sépare deux "grosses" parties, si vous voulez une fine barre de séparation, remplassez la "class" par "my-4 border-top border-dark" -->
  </div>
  </div>

<!-- Partie "Sondages terminés" -->

<div class="bg-success-danger">
  <div class="container">
    <div class="row">
      <h2 class="text-center text-danger display-3 fw-bold">Sondages terminés</h2>
        <p class="lead text-center display-6">Cette partie regroupe les <b>sondages terminés</b>, cliquez sur le(s) lien(s) pour consulter les résultats.</b></p>
    </div>
    <hr class="my-4 border-top border-dark">
  </div>

  <!-- METTEZ LES SONDAGES DESORMAIS TERMINES EN DESSOUS DE CE COMMENTAIRE -->

  <div class="container">
    <div class="row">
      <h2 class="text-center display-5">Sondage de la semaine du <span class="text-danger fw-bold">07/06/2023</span> au <span class="text-danger fw-bold">13/06/2023</span></h2>
      <p class="lead text-center center display-6"><b>SUJET :</b> Panne d'inspiration pour des titres de sujet</p>
      <h4 class="text-center"><a class="btn btn-warning fw-bold" target="_blank" href="#">Accéder aux résultats du sondage</a></h4>
    </div>
    <hr class="my-4 border-top border-dark">
  </div>

  <div class="container pb-4">
    <div class="row">
      <h2 class="text-center display-5">Sondage de la semaine du <span class="text-danger fw-bold">01/06/2023</span> au <span class="text-danger fw-bold">06/06/2023</span></h2>
      <p class="lead text-center center display-6"><b>SUJET :</b> Une bien grosse panne, sérieusement.</p>
      <h4 class="text-center"><a class="btn btn-warning fw-bold" target="_blank" href="#">Accéder aux résultats du sondage</a></h4>
    </div>
  </div>
</div>



 
<?php 
  require_once(__DIR__ . "/menu/footer.php");
?>