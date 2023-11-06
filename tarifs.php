<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

        <!-- Header -->
        <header class="bg-warning bg-gradient text-dark">
          <div id="debut" class="container px-4 text-center">
            <h1 class="display-3 text-center fw-bold text-uppercase mb-3 mt-4">Tarifs</h1>
          </div>
        </header>

<div class="container">
  <div class="row">
    <h2 class="display-5 text-center fw-bold text-uppercase my-3 mb-3">Cours sur l'année (DIA)</h2>
    <p class="lead"><i>Les tarifs exercés sont les mêmes que ceux proposés par <a href="https://www.dance-in-avignon.fr/tarifs">DanceInAvignon</a> (DIA) et Danse & Être à Avignon (DEA), si vous souhaitez vous y inscrire, n'hésitez pas à remplir <a href="https://www.farinwest.org/contact.php">notre formulaire</a> en précisant bien votre demande.</i></p>

    <p class="display-6 fw-bold text-center">Vous pouvez faire scroller le tableau ci-dessous à gauche et à droite pour voir l'intégralité de son contenu (pour les appareils à petit écran).
  </div>
</div>

<!--Table-->
<div class="table-responsive mt-2">
  <table class="table table-bordered custom-border w-auto mx-auto text-center">
    <!--Table Head (première ligne)-->
    <thead>
      <tr>
        <th class="invisible hide-border wider-column">Formules</th>
        <th>1 cours par semaine</th>
        <th>2 cours par semaine</th>
        <th>3 cours par semaine</th>
        <th>Cours supplémentaires</th>
      </tr>
    </thead>
    <!--Table Head-->
    <!--Table Body (lignes suivantes) -->
    <tbody>
      <!-- Ligne 2 -->
      <tr class="table-warning">
        <th scope="row" class="text-start">Frais d'adhésion à l'association pour la saison<br><span class="small">Du 5 septembre 2022 au 18 juin 2023 (hors vacances scolaires)</small></th>
        <td>10€</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <!-- Ligne 3 -->
      <tr>
        <th scope="row" class="text-start">Enfants - Ados & Etudiants</th>
        <td>230€</td>
        <td>410€</td>
        <td>570€</td>
        <td>+140€ par cours supplémentaire</td>
      </tr>
      <!-- Ligne 4 -->
      <tr class="table-warning">
        <th scope="row" class="text-start">Adulte (1 personne)</th>
        <td>260€</td>
        <td>460€</td>
        <td>640€</td>
        <td>+160€ par cours supplémentaire</td>
      </tr>
      <!-- Ligne 5 -->
      <tr>
        <th scope="row" class="text-start">Couple de danse (2 personnes)</th>
        <td>460€</td>
        <td>780€</td>
        <td>1100€</td>
        <td>+320€ par cours supplémentaire</td>
      </tr>
      <!-- Ligne 6 -->
      <tr class="table-warning">
        <th scope="row" class="text-start">Carte de 10 cours - Valable toute la saison</th>
        <td>130€</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <!-- Ligne 7 -->
      <tr>
        <th scope="row" class="text-start">Cours à l'unité</th>
        <td>16€</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <div class="row">
  <hr class="my-2" style="height: 3px; background-color: #000;">
    <h2 class="display-5 text-center fw-bold text-uppercase my-3 mb-3">Cours particuliers</h2>
    <p style="font-size:26px;" class="lead text-center">Vous souhaitez avoir un cours particulier avec les professeurs de FarInWest ? N'hésitez pas alors à compléter notre <b><a href="https://www.farinwest.org/contact.php">formulaire de contact</a></b> afin de prendre rendez-vous avec nous.</p>
  </div>
</div>
 
<?php 
  require_once(__DIR__ . "/menu/footer.php");
?>