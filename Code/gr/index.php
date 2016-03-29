<?php
require('../index_header.php');
require_once('../constants.php');
?>
<!DOCTYPE HTML> 
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Έρευνα σχετικά με την Ανίχνευση Ψεύδους</title>
<meta name="description" content="">
<meta name="keywords" content="SHS, Survey, Project, EPFL, Lausanne, UNIL, Lying, Detection, Psychology">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

</head>

<body>


<div class="container">

      <div class="row row-top-margin">
            <div class="col-xs-2 col-xs-offset-2">
                  <img src="http://ceat.epfl.ch/files/content/sites/ceat/files/shared/images/menus/ecussons/EPFL.png" class="img-responsive" alt="EPFL">
            </div>
            <div class="col-xs-3 col-xs-offset-3">
                  <img src="http://ceat.epfl.ch/files/content/sites/ceat/files/shared/images/menus/ecussons/UNIL.jpg" class="img-responsive" alt="UNIL">
            </div>
      </div>

      <div class="row row-top-margin text-center">
            <div class="col-md-12">
                  <h1>Έρευνα σχετικά με την Ανίχνευση Ψεύδους</h1>
            </div>
      </div>

      <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                  <p class="lead">Αγαπητέ/ή συμμετέχοντα/ουσα,</p>
                  <p class="lead">Είμαστε μια ομάδα μεταπτυχιακών φοιτητών από την Πολυτεχνική Σχολή της Λωζάνης (École Polytechnique Fédérale de Lausanne, EPFL) και πραγματοποιούμε μία ερευνητική μελέτη σε συνεργασία με το Ινστιτούτο Ψυχολογίας του Πανεπιστημίου της Λωζάνης (Institut de Psychologie, Université de Lausanne).</p>
                  <p class="lead">Σκοπός της μελέτης είναι να καθορίσουμε ποιοι δείκτες του προσώπου, αλλά και ποιοι συνδυασμοί αυτών, κάνουν ένα άτομο να φαίνεται αξιόπιστο ή όχι. Η συμμετοχή σας είναι πολύτιμη και θα διαρκέσει περίπου <?php echo EXPERIENCE_DURATION ?> λεπτά.</p>
                  <p class="lead">Θα σας ζητήσουμε, λοιπόν, να κοιτάξετε διαδοχικά πρόσωπα και να κρίνετε -όσο πιο αυθόρμητα γίνεται- αν πιστεύετε ότι το άτομο λέει ψέματα ή όχι. Θα θέλαμε να τονίσουμε ότι η συμμετοχή σας είναι εθελοντική και ότι μπορείτε να αποχωρήσετε από τη μελέτη όποια στιγμή θελήσετε. Τα δεδομένα σας θα καταγραφούν ανώνυμα, δηλαδή θα καταγράψουμε μόνο την ηλικία, το φύλο, τα χρόνια εκπαίδευσης, τη χώρα από την οποία κατάγεστε και τη χώρα στην οποία διαμένετε. Αν συνεχίσετε την συμμετοχή σας στην έρευνα, θα θεωρήσουμε ότι δίνετε συγκατάθεση για να χρησιμοποιηθούν τα δεδομένα σας αποκλειστικά για ερευνητικούς σκοπούς. Αν έχετε οποιαδήποτε άλλη ερώτηση, μπορείτε να επικοινωνήσετε μαζί μας στην παρακάτω ηλεκτρονική διεύθυνση: <a href="mailto:mathieu.arminjon@unige.ch">mathieu.arminjon@unige.ch</a>.</p>
                  <p class="lead">Αν θέλετε να συμμετάσχετε, πατήστε τον παρακάτω σύνδεσμο. Θα κατευθυνθείτε στην έρευνα.</p>
            </div>
      </div>

      <div class="row row-top-margin row-bottom-margin">
            <div class="col-md-12 text-center">
                  <button class="btn btn-primary btn-lg" id="take_button" onclick='window.location.href = "register.php";'>Συμμετοχή στην έρευνα</button>
            </div>
      </div>


</div>

<!-- <script>
document.getElementById("take_button").focus();
</script> -->

</body>


</html>