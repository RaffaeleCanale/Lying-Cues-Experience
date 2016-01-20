<?php include('../training_header.php') ?>

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
        <h1>Training</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          You will be shown a sequence of short videos. All the videos are in black and white, with <b>no sound</b>. Pay close attention to them as they will disappear right after they ended. Then, if you think the presented person <b>is lying</b> press the <b>F key</b> on your keyboard, if you think otherwise press the <b>J key</b>.
        </p>
        <?php if (SHOW_DOTS) {
          echo '<p class="lead">Before each video, you will be shown a pattern of dots for a very short period of time. Pay good attention to the placement of the dots because you will be asked to replace them after you answer the question.</p>';          
        }
        ?>        
        <p class="lead">
          Note that you cannot replay or go back to any previous videos.
        </p>
        <p class="lead">
          Before starting the actual experiment, you will be shown a set of example videos so that you can get familiar with the system. Your answers to these examples will not be registered.
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