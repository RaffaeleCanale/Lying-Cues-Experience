<?php
include('../generate_playlist.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <title>Étude SHS :: Détection de mensonges</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../dots.js"></script>
  <script src="../playlist.js"></script>
  <?php if (TEST_MODE) echo '<script src="../playlist_auto.js"></script>' ?>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", init, false);

    // First thing called as soon as the page is loaded
    function init() { 

      // Initialize all the PHP constants for the JavaScript
      USER_ID = <?php echo '"' . $_SESSION["userId"] . '"'; ?>;
      playlist = <?php echo json_encode($playlist); ?>;
      NEXT_URL = <?php echo '"' . $nextUrl . '"'; ?>;
      BREAK_INTERVAL = <?php echo $break_interval ?>;
      DOTS_DURATION = <?php echo DOTS_DURATION ?>;
      IMAGE_DURATION = <?php echo IMAGE_DURATION ?>;
      CROSS_DURATION = <?php echo FIXATION_CROSS_DURATION ?>;
      SHOW_DOTS = <?php echo (SHOW_DOTS ? "true" : "false") ?>;

      MSG_WAIT='Veuillez patienter pendant le chargement des images...';
      MSG_READY='Préparez vos doigts sur les touches <b>F</b> et <b>J</b><br>Appuyez sur ESPACE quand vous êtes prêt';
      MSG_LYING='Est-ce un menteur?';
      MSG_DOTS='Replacez les points';
      MSG_BREAK='Prenez une pause de 5 minutes<br>Quand vous êtes prêt à reprendre, cliquez sur le bouton ci-dessous';
      MSG_EXIT_BREAK='Continuer';
      MSG_TIMED_OUT='Vous étiez trop lent<br>Veuillez répondre de façon spontanée';
      MSG_CONFIRM='Confirmer';


      enterState(states.LOADING_IMAGES);
    }

  </script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body onkeypress="eventKeyPress(event);">
  <div class="container">

  <!-- <div class="row row-top-margin text-center">
    <div class="col-md-12">
      <h1>HTML5 Video Events and API</h1>
    </div>
  </div> -->

  <div class="progress row row-top-margin">
    <div class="progress-bar progress-bar-info" role="progressbar" id='progress' aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
      <!-- <span class="sr-only">40% Complete (success)</span> -->
    </div>
  </div>

  <div class="row row-top-margin">
    <div onclick="keyPress(102);" class="col-xs-2">
      <div class="lead text-center" style='visibility:hidden' id='f_key'><img width='70' src="../img/key_f.png" class="img-responsive center-block"><br>Cette personne ment</div>
    </div> 

    <div class="col-xs-8">
      <p class="lead text-center" id='message'></p>

      <div id="content" class="lead text-center">


      </div>
    </div>
    <div onclick="keyPress(106);" class="col-xs-2">
      <div class="lead text-center" style='visibility:hidden' id='j_key'><img width='70' src="../img/key_j.png" class="img-responsive center-block"><br>Cette personne ne ment <b>pas</b></div>
    </div>
  </div>

  <div class="form-group text-center" style="margin-top: 1cm;">    
    <button id="confirm" class="btn btn-primary" style="visibility:hidden" onclick="buttonPressed()"></button>
  </div>

</div>
</body>
</html>
