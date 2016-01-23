<?php 
include('../end_header.php');
include('../constants.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <title>Έρευνα σχετικά με την Ανίχνευση Ψεύδους</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", init, false);

    function init() {
      var delay = <?php echo END_REDIRECT_DELAY ?>;
      
      if (delay > 0) {
        setTimeout(function() {
          window.location.href = "<?php echo $redirect_page ?>";
        }, delay);
      }
    }
  </script>
</head>

<body>
  <div class="container">

    <div class="row row-top-margin text-center">
      <div class="col-md-12">
        <h1>Ευχαριστούμε!</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">
        <p class="lead">Ευχαριστούμε για τη συμμετοχή σας στην έρευνα. Οι απαντήσεις σας έχουν καταγραφεί επιτυχώς.</p>
        <p class="lead">Αν ενδιαφέρεστε να μάθετε περισσότερα για την έρευνα, <a href="more.php">πατήστε εδώ</a>.</p>
        <p class="lead important-text">Η συνολική σου ακρίβεια ήταν <?php echo "$score_friendly" ?>.</p>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">
        <?php 
          if (END_REDIRECT_DELAY > 0) {
            echo '<p class="lead row-top-margin important-text"></p>';
          }
        ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Έξοδος</button>
      </div>
    </div>

  </div>
</body>
</html>