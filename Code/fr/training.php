<?php include('../training_header.php') ?>

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
        <h1>Entraînement</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Vous allez visionner de courtes séquences vidéo. Toutes les vidéos sont en noir et blanc, <b>sans son</b>. Veuillez les regarder avec attention, car elles disparaîtront directement après avoir été visionnées. Ensuite, si vous pensez que la personne ment, pressez la <b>touche F</b> de votre clavier ; sinon, pressez la <b>touche J</b>.
        </p>
        <?php if (SHOW_DOTS) {
          echo '<p class="lead">Avant chaque vidéo, une grille contenant des points sera affichée brièvement. Observez la disposition des points avec attention car il vous faudra les replacer après avoir répondu à la question.</p>';
        }
        ?>
        <p class="lead">
          Notez qu’il n’est pas possible de revisionner ou revenir aux vidéos précédentes.
        </p>        
        <p class="lead">
          Avant de commencer l’expérience, vous allez voir une série de vidéos en guise d’exemple, afin que vous puissiez vous familiariser avec le système. Vos réponses pour ces questions ne seront pas enregistrées.
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <input type="submit" value="Commencer l'entraînement" class="btn btn-primary">
      </form>

    </div>
  </body>
  </html>