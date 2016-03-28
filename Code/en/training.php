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
          You will be shown a sequence of pictures. For every picture, if you think the person <b>is lying</b> press the <b>F key</b> on your keyboard, if you think otherwise press the <b>J key</b>.
        </p>
        <?php if (SHOW_DOTS) {
          echo '<p class="lead">Before each image, you will be shown a pattern of dots for a very short period of time. Pay good attention to the placement of the dots because you will be asked to replace them after you answer the question.</p>';          
        }
        ?>
        <p class="lead">
          Before starting the actual experiment, you will be shown a set of example images so that you can get familiar with the system. Your answers to these examples will not be registered.
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <input type="submit" value="Start" class="btn btn-primary">
      </form>

    </div>
  </body>
  </html>