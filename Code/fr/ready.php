<?php 
include('../ready_header.php'); 
include('../constants.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <title>Étude SHS :: Détection de mensonges</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">

    <div class="row row-top-margin text-center">
      <div class="col-md-12">
        <h1>Prêt!</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Nous attirons votre attention sur le fait que le temps de réponse est prit en compte. Veuillez donc rester concentré durant l'expérience. De plus, préparez votre index gauche sur la <b>touche F</b> ainsi que votre index droit sur la <b>touche J</b>.          
        </p>
        <p class="lead important-text">Prenez vos décisions aussi spontanément que possible.</p>
        <p class="lead">Dès que vous répondez à une question, vous passerez automatiquement à la prochaine sans pouvoir revenir en arrière. Une barre de progression affichera votre progrès.</p>

        <p class="lead">
          Vous allez maintenant démarrer l'expérience et vos résultats seront enregistrés. L'expérience devrait prendre environ <?php echo EXPERIENCE_DURATION ?> minutes à compléter<?php
            if (NB_BREAKS_SURVEY > 0) {
              echo " et inclut " . (NB_BREAKS_SURVEY == 1 ? "une pause" : NB_BREAKS_SURVEY . " pauses");
            }
          ?>.        
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Commencer</button>
    </form>

  </div>
</body>
</html>