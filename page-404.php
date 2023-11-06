<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

        <section class="bg-danger" id="erreur404">
            <div class="container mt-5 pt-4">
                <div class="row g-2 justify-content-around">
                    <h1 class="display-3 text-center fw-bold text-uppercase mb-3">Erreur 404 :(</h1>
                </div>
            </div>
        </section>

        <section>
            <div class="container text-center d-flex flex-column justify-content-center vh-50">
                <h1>La page que vous recherchez n'existe pas, ou a été supprimée.</h1>
                <h2>Pas de panique, nous vous renvoyons à la page d'accueil dans <span class="text-danger" id="countdown"></span> seconde(s) !<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </section>

        <script>
    var countdown = 6; // Décompte initial en secondes
    var countdownElement = document.getElementById('countdown');

    function startCountdown() {
      countdownElement.innerHTML = countdown;

      if (countdown === 0) {
        window.location.href = '/';
      } else {
        countdown--;
        setTimeout(startCountdown, 1000); // Appeler la fonction toutes les 1 seconde (1000 millisecondes)
      }
    }

    startCountdown();
  </script>

<?php 
  require_once(__DIR__ . "/menu/footer.php");
?>