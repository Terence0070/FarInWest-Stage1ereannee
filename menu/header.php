<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="" />
        <meta name="keywords" content="farinwest, far in west, farin west, far inwest, salsa, bachata, wcs, danses, avignon, vaucluse">
        <?php
        try {
          // Génère une méta-description pour chaque page
          $metaDescription = "Métadescription par défaut";

          // Obtiens le nom de la page courante
          $nom_page = basename($_SERVER['PHP_SELF'], ".php");

          // Déclare une variable pour le titre par défaut
          $titre = "FarInWest";
          $metaDescription = "Bienvenue à FarInWest ! Ready to dance?";

          // Vérifie la page courante et met à jour le titre en conséquence
          switch ($nom_page) {
              case "danses":
                  $titre = "Danses";
                  $metaDescription = "Connaître toutes les danses enseignées par FarInWest";
                  break;
              case "association":
                  $titre = "Association";
                  $metaDescription = "Si vous souhaitez en savoir plus sur l'association FarInWest, c'est sur cette page que cela se passe";
                  break;
              case "sondages":
                  $titre = "Sondages";
                  $metaDescription = "Pour les membres, voici la page référençant les sondages";
                  break;
              case "tarifs":
                  $titre = "Tarifs";
                  $metaDescription = "Prendre connaissance des tarifs pour vous inscrire aux cours de FarInWest";
                  break;
              case "contact":
                  $titre = "Contact";
                  $metaDescription = "Vous souhaitez prendre contact avec FarInWest ? Remplissez notre formulaire de contact";
                  break;
              case "salsa":
                  $titre = "Salsa";
                  $metaDescription = "Qu'est-ce que la Salsa ?";
                  break;
              case "bachata":
                  $titre = "Bachata";
                  $metaDescription = "Qu'est-ce que la Bachata ?";
                  break;
              case "wcs":
                  $titre = "WCS";
                  $metaDescription = "Qu'est-ce que la West Coast Swing ?";
                  break;
              case "cookies":
                  $titre = "Cookies";
                  $metaDescription = "";
                  break;
              case "mentions-legales":
                  $titre = "Mentions légales";
                  $metaDescription = "";
                  break;
              case "credits":
                  $titre = "Crédits";
                  $metaDescription = "";
                  break;
              case "politique-de-confidentialite":
                  $titre = "Politique de confidentialité";
                  $metaDescription = "";
                  break;
          }
      } catch (Exception $e) {
        $titre = "FarInWest";
        $metaDescription = "";
      }
      ?>
        <meta name="description" content="<?php echo $metaDescription; ?>" />
        <title><?php echo $titre; ?></title>
        <link rel="icon" type="image/x-icon" href="/images/logo.png" />
        <!-- Core theme CSS (includes Bootstrap) -->
        <link href="/FARINWEST/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            // Fonction pour vérifier la taille de l'écran
            function checkScreenWidth() {
              var smallScreen = window.matchMedia("(max-width: 425.02px)").matches;

              if (smallScreen) {
                $("#fiwText").text("FIW");
              } else {
                $("#fiwText").text("FarInWest");
              }
            }

            // Vérifier la taille de l'écran lors du chargement de la page et lors du redimensionnement
            checkScreenWidth();
            $(window).resize(checkScreenWidth);
          });
        </script>
    </head>
    <body id="page-top">
    <script type="text/javascript"> /* Cookie de Piwik Pro - Mesure de l'audience */
(function(window, document, dataLayerName, id) {
window[dataLayerName]=window[dataLayerName]||[],window[dataLayerName].push({start:(new Date).getTime(),event:"stg.start"});var scripts=document.getElementsByTagName('script')[0],tags=document.createElement('script');
function stgCreateCookie(a,b,c){var d="";if(c){var e=new Date;e.setTime(e.getTime()+24*c*60*60*1e3),d="; expires="+e.toUTCString()}document.cookie=a+"="+b+d+"; path=/"}
var isStgDebug=(window.location.href.match("stg_debug")||document.cookie.match("stg_debug"))&&!window.location.href.match("stg_disable_debug");stgCreateCookie("stg_debug",isStgDebug?1:"",isStgDebug?14:-1);
var qP=[];dataLayerName!=="dataLayer"&&qP.push("data_layer_name="+dataLayerName),isStgDebug&&qP.push("stg_debug");var qPString=qP.length>0?("?"+qP.join("&")):"";
tags.async=!0,tags.src="https://farinwest.containers.piwik.pro/"+id+".js"+qPString,scripts.parentNode.insertBefore(tags,scripts);
!function(a,n,i){a[n]=a[n]||{};for(var c=0;c<i.length;c++)!function(i){a[n][i]=a[n][i]||{},a[n][i].api=a[n][i].api||function(){var a=[].slice.call(arguments,0);"string"==typeof a[0]&&window[dataLayerName].push({event:n+"."+i+":"+a[0],parameters:[].slice.call(arguments,1)})}}(i[c])}(window,"ppms",["tm","cm"]);
})(window, document, 'dataLayer', '41181b78-edb2-46ef-a0a2-c62b53e6b4bc');
</script>
        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top navbar-sm" id="mainNav">
  <div class="container">
    <div class="d-flex align-items-center">
      <a class="nav-link nav-item btn btn-house" href="/FARINWEST/index.php"><i class="fa-solid fa-house maison-icon"></i></a> <!-- Bouton "Home" -->
      <a class="navbar-brand d-flex align-items-center" href="/FARINWEST/index.php">
        <img src="/images/logo.png" alt="Logo" class="logo-img img-fluid me-2" style="max-height: 40px; max-width: 50px;">
        <h4 id="fiwText" style="margin-top:6px; font-size:30px;" class="text-white align-self-center farinwest">FarInWest</h4>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul style="font-size:16px;" class="navbar-nav ms-auto text-center custom-nav">
        <li class="nav-item button-menu">
          <a class="nav-link btn btn-dark rounded me-2 text-uppercase fw-bold text-white menu_bouton" href="/FARINWEST/danses.php">Danses</a>
        </li>
        <li class="nav-item button-menu">
          <a class="nav-link btn btn-dark rounded me-2 text-uppercase fw-bold text-white menu_bouton" href="/FARINWEST/association.php">L'Association</a>
        </li>
        <li class="nav-item button-menu">
          <a class="nav-link btn btn-dark rounded me-2 text-uppercase fw-bold text-white menu_bouton" href="/FARINWEST/sondages.php">Sondages</a>
        </li>
        <li class="nav-item button-menu">
          <a class="nav-link btn btn-dark rounded me-2 text-uppercase fw-bold text-white menu_bouton" href="/FARINWEST/tarifs.php">Tarifs</a>
        </li>
        <li class="nav-item button-menu">
          <a class="nav-link btn btn-dark rounded me-2 text-uppercase fw-bold text-white menu_bouton" href="/FARINWEST/contact.php">Contact</a>
        </li>
        <li class="nav-item button-connexion">
          <a class="nav-link btn btn-dark btn-connexion me-2 text-uppercase fw-bold text-white menu_bouton" href="#"><i style="font-size:20px;" class="fas fa-user-circle"></i></a>
        </li>
      </ul>
  </div>
</nav>