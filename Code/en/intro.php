<?php
include('../constants.php');

session_start();
$_SESSION["training"] = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <title>SHS Survey :: Detecting lying faces</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">

    <div class="row row-top-margin text-center">
      <div class="col-md-12">
        <h1>Ready!</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Please note, the timing matters in this experiment. Thus, please stay focused throughout the experiment. Also, keep your left index finger on the <b>F key</b> and right index finger on the <b>J key</b>.
        </p>
        <p class="lead important-text">Please take your decisions as spontaneously as possible.</p>
        <p class="lead">As soon as you cast a response to a picture or time out, you move on to the next one, and you cannot go back. A progress bar will show your progress.</p>

        <p class="lead">
          You will now start the experiment and your results will be registered. The overall experiment should take about <?php echo EXPERIENCE_DURATION ?> minutes to complete<?php
            if (NB_BREAKS_SURVEY > 0) {
              echo " and includes " . (NB_BREAKS_SURVEY == 1 ? "a break" : NB_BREAKS_SURVEY . " breaks") . " during the experiment";
            }
          ?>.
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Start</button>
    </form>

  </div>
</body>
</html>