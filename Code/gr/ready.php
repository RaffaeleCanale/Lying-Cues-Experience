<?php 
require('../ready_header.php'); 
require_once('../constants.php');
?>
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
        <h1>Έτοιμοι!</h1>
      </div>
    </div>

    <div class="row row-top-margin">
      <div class="col-md-8 col-md-offset-2">        
        <p class="lead">
          Παρακαλώ σημειώστε ότι ο χρόνος αντίδρασης είναι σημαντικός σε αυτήν την έρευνα. Προσπαθήσετε, λοιπόν,  να παραμείνετε συγκεντρωμένοι κατά τη διάρκεια της έρευνας. Επίσης, κρατήσετε τον αριστερό σας δείκτη πάνω στο πλήκτρο “F” και το δεξιό σας δείκτη πάνω στο πλήκτρο “J”. Μία μπάρα προόδου θα δείχνει το πόσο έχετε προχωρήσει. Προσπαθήστε να παίρνετε τις αποφάσεις σας όσο πιο αυθόρμητα γίνεται.
        </p>
        
        <p class="lead">
          Η έρευνα θα ξεκινήσει τώρα και οι απαντήσεις σας θα καταγράφονται. Η έρευνα θα χρειαστεί συνολικά περίπου <?php echo EXPERIENCE_DURATION ?> λεπτά για να ολοκληρωθεί.          
        </p>

        <p class="lead">Κάθε ένας από τους ανθρώπους που θα βλέπετε κάποιες φορές λέει ψέματα και κάποιες φορές λέει αλήθεια. Στο τέλος της έρευνας θα υπολογιστεί ένα σκορ και θα μπορέσετε έτσι να δείτε πόσο ακριβείς ήσασταν στις εκτιμήσεις σας.</p>
      </div>
    </div>

    <form action="survey.php">
      <div class="form-group text-center">
        <input type="submit" value="Έναρξη" class="btn btn-primary">
    </form>

  </div>
</body>
</html>