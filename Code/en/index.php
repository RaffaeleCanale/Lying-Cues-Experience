<?php
include('../index_header.php');
include('../constants.php');
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
                  <p class="lead">We are working on facial features that might be cues for you to think a face is lying or not. For this reason, we have created faces in which we changed various facial features. The identity is always the same, a young man. Your task would simply be to indicate whether you think the person is currently lying or not. </p>

                  <p class="lead">This project is performed by researchers from Institute of Psychology at the University of Lausanne, the École Polytechnique Fédérale de Lausanne (EPFL) and Mathieu Arminjon, ?</p>
                  <p class="lead">The average duration of the experiment is about <?php echo EXPERIENCE_DURATION ?> minutes<?php  
                  	if (NB_BREAKS_SURVEY == 1) {
                  		echo " including a break";
                  	} else if (NB_BREAKS_SURVEY > 1) {
                  		echo " including " . NB_BREAKS_SURVEY . " breaks";
                  	}
                  ?>.</p>
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