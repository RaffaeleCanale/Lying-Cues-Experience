<?php include('../training_header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <title>Έρευνα σχετικά με την Ανίχνευση Ψεύδους</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <div class="row row-top-margin text-center">
      <div class="col-md-12">
        <h1>Στάδιο εκπαίδευσης</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Θα δείτε μια σειρά από σύντομα βίντεο. Όλα τα βίντεο είναι μαυρόασπρα, χωρίς ήχο. Δώστε ιδιαίτερη προσοχή στα βίντεο, καθώς θα εξαφανίζονται μετά την ολοκλήρωσή τους. Μετά, αν πιστεύετε ότι το άτομο που παρουσιάστηκε στο βίντεο που προηγήθηκε λέει ψέματα, πατήστε το πλήκτρο F στο πληκτρολόγιό σας. Αλλιώς, αν πιστεύετε ότι λέει αλήθεια πατήστε το πλήκτρο J.
        </p>
        <?php if (SHOW_DOTS) {
          echo '<p class="lead"></p>';
        }
        ?>        
        <p class="lead">
          Δεν θα μπορείτε να ξαναπαίξετε τα βίντεο ή να γυρίσετε πίσω σε προηγούμενα βίντεο.
        </p>
        <p class="lead">
          Πριν ξεκινήσει η μελέτη, θα δείτε μερικά παραδείγματα από βίντεο, έτσι ώστε να εξοικειωθείτε με το σύστημα. Οι απαντήσεις σας σε αυτά τα παραδείγματα δεν θα καταγραφούν.
        </p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Έναρξη</button>
    </form>

  </div>
</body>
</html>