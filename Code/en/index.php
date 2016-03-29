<?php
require('../index_header.php');
require_once('../constants.php');
?>
<!DOCTYPE HTML> 
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SHS Survey :: Detecting lying faces</title>
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
                  <h1>Lying Detection Survey</h1>
            </div>
      </div>

      <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                  <p class="lead">Dear participant,</p>
                  <p class="lead">We are a group of Master students from the École Polytechnique Fédérale de Lausanne (EPFL) performing a research project in collaboration with the Institute of Psychology at the University of Lausanne, Switzerland.</p>
                  <p class="lead">In this study (duration about <?php echo EXPERIENCE_DURATION ?> minutes), we aim to determine facial markers and their combinations that make a person appear trustworthy or not.</p>
                  <p class="lead">Thus, we would ask you to look sequentially at individual faces, and to judge as spontaneously as possible whether you think the person is lying or not. We would like to stress that your participation is voluntary, and that you can stop the experiment at any point. Your data will be treated anonymously, i.e., we will only record your age, sex, years of education, and country of origin. If you continue with the computer task, we do take this as your consent to use the data for research purposes only. If you have any further questions, please contact us at the following address: <a href="mailto:mathieu.arminjon@unige.ch">mathieu.arminjon@unige.ch</a>.</p>
                  <p class="lead">If you are willing to participate, click the button below. You will be redirected to the actual task.</p>
            </div>
      </div>

      <div class="row row-top-margin row-bottom-margin">
            <div class="col-md-12 text-center">
                  <button class="btn btn-primary btn-lg" id="take_button" onclick='window.location.href = "register.php";'>Take survey</button>
            </div>
      </div>


</div>

<!-- <script>
document.getElementById("take_button").focus();
</script> -->

</body>


</html>