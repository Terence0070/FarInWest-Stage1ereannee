<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

<!-- Header -->
<header class="bg-warning bg-gradient text-dark">
  <div id="debut" class="container px-4 text-center">
    <h1 class="display-3 text-center fw-bold text-uppercase mb-3 mt-4">Formulaire de contact</h1>
  </div>
</header>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'ressources/PHPMailer-6.6.5/src/Exception.php';
require 'ressources/PHPMailer-6.6.5/src/PHPMailer.php';
require 'ressources/PHPMailer-6.6.5/src/SMTP.php';

$errors = array('nom' => '', 'prenom' => '', 'email' => '', 'sujet' =>'', 'telephone' =>'');
$avertissement['non_envoie'] = "";
$correct['envoie'] = "";

function myMail($dest, $subject, $body) {
  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'XXXXX'; // Remplacez par l'adresse de votre serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'XXXXX'; // Remplacez par votre nom d'utilisateur SMTP
    $mail->Password = 'XXXXX'; // Remplacez par votre mot de passe SMTP
    $mail->SMTPSecure = 'ssl'; // Ne surtout pas mettre en majuscule... genre vraiment.
    $mail->Port = 465; // Généralement 587, mais ça peut varier

    $fromEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $fromName = htmlspecialchars($_POST['prenom'] . ' ' . $_POST['nom'], ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($_POST['sujet'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    $mail->CharSet = 'UTF-8'; // Définir l'encodage des caractères

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress('XXXXX', 'FarInWest'); // Insérer l'e-mail pour recevoir le mail
    $mail->addReplyTo($fromEmail, $fromName);
    $mail->Subject = $subject;
    $mail->isHTML(true); // Définir le contenu du message comme HTML
    $mail->MsgHTML($message); // Utiliser la méthode MsgHTML pour conserver les caractères spéciaux et les sauts de ligne

    $mail->send();
    // echo 'Le message a été envoyé avec succès.';
  } catch (Exception $e) {
    // echo 'Une erreur est survenue lors de l'envoi du message : ' . $mail->ErrorInfo;
  }
}

$errors = array(
  'nom' => '',
  'prenom' => '',
  'email' => '',
  'telephone' => '',
  'sujet' => ''
);

$correct = array(
  'envoie' => ''
);

$avertissement = array(
  'non_envoie' => ''
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $response = json_decode(file_get_contents('XXXXX' . $_POST['recaptchaResponse']));

  if ($response->success) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telephone = trim($_POST['telephone']);
    $sujet = trim($_POST['sujet']);
    $message = trim($_POST['message']);

    // Sanitization des entrées utilisateur
    $nom = filter_var($nom, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $prenom = filter_var($prenom, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $telephone = filter_var($telephone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $sujet = filter_var($sujet, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    // Validation des champs

    // Nom : Autorise les lettres, les tirets et les espaces, entre 2 et 50 caractères
    if (!preg_match('/^[A-Za-zÀ-ÿ\- ]{2,50}$/', $nom)) {
      $errors['nom'] = "<span style='color:red;'>Le nom doit contenir entre 2 et 50 caractères.</span>";
    }

    // Prénom : Autorise les lettres, les tirets et les espaces, entre 2 et 50 caractères
    if (!preg_match('/^[A-Za-zÀ-ÿ\- ]{2,50}$/', $prenom)) {
      $errors['prenom'] = "<span style='color:red;'>Le prénom doit contenir entre 2 et 50 caractères.</span>";
    }

    // Email : Doit être une adresse email valide
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
      $errors['email'] = "<span style='color:red;'>Veuillez saisir une adresse email valide.</span>";
    }

    // Téléphone : Autorise les chiffres, les tirets et les espaces, entre 7 et 20 caractères, autorise à ce que le champ soit vide
    if (!empty($telephone) && !preg_match('/^[0-9\- ]{7,20}$/', $telephone)) {
      $errors['telephone'] = "<span style='color:red;'>Le téléphone n'est pas valide.</span>";
    }

    // Sujet : Autorise les lettres, les chiffres, les tirets, les guillemets et les espaces, entre 2 et 100 caractères
    if (!preg_match('/^[A-Za-zÀ-ÿ0-9\- "\']{2,100}$/', $sujet)) {
      $errors['sujet'] = "<span style='color:red;'>Le sujet doit contenir entre 2 et 100 caractères.</span>";
    }

    // Vérifier si des erreurs ont été détectées
    $hasErrors = false;
    foreach ($errors as $error) {
      if (!empty($error)) {
        $hasErrors = true;
        break;
      }
    }

    if (!$hasErrors) {
      $full_message = "Nom: " . $nom . "\n" .
             "Prénom: " . $prenom . "\n" .
             "Email: " . $email . "\n" .
             "Téléphone: " . $telephone . "\n" .
             "Sujet: " . $sujet . "\n" .
             "Message: " . $message;
      myMail($dest, $sujet, $full_message);
      $correct['envoie'] = "<h1 style='text-align:center; color:green;'>Votre message a été envoyé avec succès.</h1>";
    } else {
      $avertissement['non_envoie'] = "<h1 style='text-align:center; color:red;'>Veuillez corriger les erreurs dans le formulaire.</h1>";
    }
  } else {
    $avertissement['non_envoie'] = "<h1 style='text-align:center; color:red;'>La vérification reCAPTCHA a échoué. Veuillez réessayer.</h1>";
  }
  // var_dump($response, $nom, $prenom, $email, $telephone, $sujet, $message, $full_message);
}
?>

<div class="container mt-3">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-6">
      <p class="lead fw-bold text-center">Pour toute information, veuillez compléter ce formulaire afin de prendre contact avec FarInWest !</p>
      <form action="" method="POST" onsubmit="onClick(event)">
        <?php if(isset($correct['envoie'])) { echo $correct['envoie']; } ?>
        <?php if(isset($avertissement['non_envoie'])) { echo $avertissement['non_envoie']; } ?>
        <div class="form-group">
          <label for="nom"><b>Nom<span style="color:red;">*</span> :</b></label>
          <input type="text" class="form-control" required id="nom" name="nom" required>
          <span class=error><?php echo $errors['nom']; ?></span>
        </div>
        <div class="form-group">
          <label for="prenom"><b>Prénom<span style="color:red;">*</span> :</b></label>
          <input type="text" class="form-control" required id="prenom" name="prenom" required>
          <span class=error><?php echo $errors['prenom']; ?></span>
        </div>
        <div class="form-group">
          <label for="email"><b>Email<span style="color:red;">*</span> :</b></label>
          <input type="email" class="form-control" required id="email" name="email" required>
          <span class=error><?php echo $errors['email']; ?></span>
        </div>
        <div class="form-group">
          <label for="telephone"><b>Téléphone :</b></label>
          <input type="tel" class="form-control" id="telephone" name="telephone">
          <span class=error><?php echo $errors['telephone']; ?></span>
        </div>
        <div class="form-group">
          <label for="sujet"><b>Sujet<span style="color:red;">*</span> :</b></label>
          <input type="text" class="form-control" required id="sujet" name="sujet" required>
          <span class=error><?php echo $errors['sujet']; ?></span>
        </div>
        <div class="form-group">
          <label for="message"><b>Message<span style="color:red;">*</span> :</b></label>
          <textarea class="form-control" id="message" name="message" style="height: 250px;" required maxlength="800" placeholder="Maximum de 800 caractères"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
        </div>
        <div class="form-group">
          <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
        </div>
        <div class="form-check">
          <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            En envoyant ce formulaire, vous acceptez qu'on recueille les données envoyées afin de vous identifier et vous répondre.
          </label>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-warning" value="Envoyer">
          <p><b><span style="color:red;">*</span> = Champ obligatoire à remplir</b></p>
        </div>
      </form>
    </div>
  </div>
</div>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lc6mmAmAAAAAMs5SDcjHKv-DvSyXRy3HHOqXAui"></script>
        <script>
          function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
              grecaptcha.execute('6Lc6mmAmAAAAAMs5SDcjHKv-DvSyXRy3HHOqXAui', {action: 'submit'}).then(function(token) {
                document.getElementById("recaptchaResponse").value = token;
                document.querySelector("form").submit();
              });
            });
          }
        </script>
        <script>
                // Récupérer les références des champs de texte
        var nomField = document.getElementById('nom');
        var prenomField = document.getElementById('prenom');
        var emailField = document.getElementById('email');
        var telephoneField = document.getElementById('telephone');
        var sujetField = document.getElementById('sujet');

        // Ajouter des écouteurs d'événements d'entrée aux champs de texte
        nomField.addEventListener('input', validateNom);
        prenomField.addEventListener('input', validatePrenom);
        emailField.addEventListener('input', validateEmail);
        telephoneField.addEventListener('input', validateTelephone);
        sujetField.addEventListener('input', validateSujet);

        // Fonction de validation pour le champ de nom
        function validateNom() {
          var nomValue = nomField.value;
          var regex = /^[A-Za-zÀ-ÿ\- ]{2,50}$/;
          if (!regex.test(nomValue)) {
            nomField.classList.add('error');
          } else {
            nomField.classList.remove('error');
          }
        }

        // Fonction de validation pour le champ de prénom
        function validatePrenom() {
          var prenomValue = prenomField.value;
          var regex = /^[A-Za-zÀ-ÿ\- ]{2,50}$/;
          if (!regex.test(prenomValue)) {
            prenomField.classList.add('error');
          } else {
            prenomField.classList.remove('error');
          }
        }

        // Fonction de validation pour le champ d'email
        function validateEmail() {
          var emailValue = emailField.value;
          var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
          if (!regex.test(emailValue)) {
            emailField.classList.add('error');
          } else {
            emailField.classList.remove('error');
          }
        }

        // Fonction de validation pour le champ de téléphone
        function validateTelephone() {
          var telephoneValue = telephoneField.value;
          var regex = /^[0-9\- ]{7,20}$/;
          if (!regex.test(telephoneValue)) {
            telephoneField.classList.add('error');
          } else {
            telephoneField.classList.remove('error');
          }
          
          if (telephoneValue === "") {
            telephoneField.classList.remove('error');
          }
        }

        // Fonction de validation pour le champ de sujet
        function validateSujet() {
          var sujetValue = sujetField.value;
          var regex = /^[A-Za-zÀ-ÿ0-9\- "\']{2,100}$/;
          if (!regex.test(sujetValue)) {
            sujetField.classList.add('error');
          } else {
            sujetField.classList.remove('error');
          }
        }
        </script>
      </div>
    </div>
  </div>
</section>

<?php require_once(__DIR__ . "/menu/footer.php"); ?>