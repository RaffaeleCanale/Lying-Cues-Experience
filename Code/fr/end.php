<?php 
require('../end_header.php');
require_once('../constants.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <title>Étude SHS :: Détection de mensonges</title> 
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

  <?php if (DEBUG_MODE) echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>' ?>
  <?php if (DEBUG_MODE) echo '<script src="../debug/console_logger.js"></script>' ?>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", init, false);

    var USER_ID = <?php echo '"' . $_SESSION["userId"] . '"'; ?>;

    function init() {

      var delay = <?php echo END_REDIRECT_DELAY ?>;
      
      if (delay > 0) {
        console.log('Redirect delay set in', delay, 'ms');

        setTimeout(function() {
          console.log('Redirecting...')
          window.location.href = "<?php echo $redirect_page ?>";
        }, delay);
      } else {
        console.log('No redirect delay set')
      }
    }
  </script>
</head>

<body>
  <div class="container">

    <div class="row row-top-margin text-center">
      <div class="col-md-12">
        <h1>Merci !</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">
        <p class="lead">Merci d'avoir participé à notre expérience. Vos réponses ont été correctement enregistrées.</p>            
        <p class="lead">Pour plus d'informations sur notre étude, <a href="more.php">cliquez ici</a>.</p>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">
        <?php 
          if (END_REDIRECT_DELAY > 0) {
            echo '<p class="lead row-top-margin important-text">Vous serez redirigé sur la page d\'accueil dans ' . (END_REDIRECT_DELAY/1000) . ' secondes...</p>';
          }
        ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Page d'accueil</button>
      </div>
    </div>

  </div>
</body>
</html>