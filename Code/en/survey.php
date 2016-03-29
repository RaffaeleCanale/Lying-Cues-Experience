<?php 
require('../survey_header.php'); 
require_once('../constants.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <title>SHS Survey :: Detecting lying faces</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../dots.js"></script>
  <script src="../playlist.js"></script>
  <?php if (AUTO_MODE) echo '<script src="../debug/playlist_auto.js"></script>' ?>
  <?php if (DEBUG_MODE) echo '<script src="../debug/console_logger.js"></script>' ?>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", init, false);

    function init() { // First thing called as soon as the page is loaded      
      USER_ID = <?php echo '"' . $_SESSION["userId"] . '"'; ?>;
      playlist = <?php echo json_encode($playlist); ?>;
      NEXT_URL = <?php echo '"' . $nextUrl . '"'; ?>;
      BREAK_INTERVAL = <?php echo $break_interval ?>;
      DOTS_DURATION = <?php echo DOTS_DURATION ?>;
      IMAGE_DURATION = <?php echo IMAGE_DURATION ?>;
      CROSS_DURATION = <?php echo FIXATION_CROSS_DURATION ?>;
      SHOW_DOTS = <?php echo (SHOW_DOTS ? "true" : "false") ?>;

      MSG_WAIT='Please wait while the images are loading...';
      MSG_READY='Prepare your fingers on the <b>F</b> and <b>J keys</b><br>Then press SPACE when ready';
      MSG_LYING='Is this person lying?';
      MSG_DOTS='Replace the previous dots';
      MSG_BREAK='Take a 5 minutes break<br>When you are ready to continue, press the <b>continue</b> button';
      MSG_EXIT_BREAK='Continue';
      MSG_TIMED_OUT='You were too slow<br>Please answer as spontaneously as possible';
      MSG_CONFIRM='Confirm';

      MSG_EXIT_WARNING='Warning, by leaving this page, you\'ll quit the experiment and all your results will be lost!';

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
      <div class="lead text-center" style='visibility:hidden' id='f_key'><img width='70' src="../img/key_f.png" class="img-responsive center-block"><br>This person is lying</div>
    </div> 

    <div class="col-xs-8">
      <p class="lead text-center" id='message'>Please wait while the images are loading...</p>

      <div id="content" class="lead text-center">


      </div>
    </div>
    <div onclick="keyPress(106);" class="col-xs-2">
      <div class="lead text-center" style='visibility:hidden' id='j_key'><img width='70' src="../img/key_j.png" class="img-responsive center-block"><br>This person is <b>not</b> lying</div>
    </div>
  </div>

  <div class="form-group text-center" style="margin-top: 1cm;">    
    <button id="confirm" class="btn btn-primary" style="visibility:hidden" onclick="buttonPressed()">Confirm</button>  
  </div>

</div>
</body>
</html>
