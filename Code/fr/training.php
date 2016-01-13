<?php

session_start();

include('../db_connection.php'); // Creates a connection $conn
include('../constants.php');

// Insert User info to DB
$sql = "INSERT INTO Users (age, gender, degree, origin_country, residence_country, show_dots) VALUES ('". join("', '",$_POST). "', " . (SHOW_DOTS?"true":"false") . ")";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  $_SESSION["userId"] = $last_id;
} else {  
  die('An error occurred, please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}

$conn->close();

$_SESSION["training"] = TRUE;

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
        <h1>Entraînement</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Une séquence d'images sera affichée. Pour chaque image, si vous pensez que la personne est entrain de mentir, appuyez sur la <b>touche F</b> du clavier, si vous pensez le contraire, appuyez sur la <b>touche J</b>.
        </p>
        <?php if (SHOW_DOTS) {
          echo '<p class="lead">Avant chaque image, une grille contenant des points sera affichée brièvement. Observez la disposition des points avec attention car il vous faudra les replacer après avoir répondu à la question.</p>';
        }
        ?>

        <p class="lead">
          Avant de démarrer l'expérience, répondez à une courte séquence d'images d'entraînement afin de vous familiariser avec le système. Vos réponses à ces images ne seront pas enregistrées.
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Commencer l'entraînement</button>
      </form>

    </div>
  </body>
  </html>