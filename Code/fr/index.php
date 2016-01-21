<?php
include('../index_header.php');
include('../constants.php');
?>
<!DOCTYPE HTML> 
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Étude SHS :: Détection de mensonges</title>
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
                  <h1>Étude: détection de mensonges</h1>
            </div>
      </div>

      <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                  <p class="lead">Cher(ère) participant(e),</p>                                  
                  <p class="lead">Nous sommes un groupe de recherche de l'École Polytechnique Fédérale de Lausanne (EPFL) et de l'Université de Lausanne. Nous réalisons une recherche en collaboration avec l'Institut de Psychologie à l'Université de Lausanne, en Suisse.</p>
                  <p class="lead">Dans cette étude (durée d'environ <?php echo EXPERIENCE_DURATION ?> minutes), notre but est d'identifier les marqueurs faciaux de mensonge, ainsi que leurs combinaisons.</p>
                  <p class="lead">Nous souhaiterions que vous regardiez attentivement chacun des visages et que vous indiquiez aussi rapidement que possible si la personne vous semble mentir ou non.</p>
                  <p class="lead">Nous aimerions rappeler que votre participation est volontaire, et que vous pouvez arrêter l'expérience à tout moment. Vos données seront traitées de façon anonyme, c'est-à-dire que nous n'enregistrerons que votre âge, sexe, années d'éducation et pays d'origine. Si vous poursuivez l'expérience, nous prendrons ceci comme votre consentement pour l'utilisation des données, dans un but de recherche uniquement. Si vous avez d'autres questions, veuillez s'il-vous-plaît nous contacter à l'adresse suivante : <a href="mailto:mathieu.arminjon@unige.ch">mathieu.arminjon@unige.ch</a></p>
                  <p class="lead">Cliquez sur le bouton ci-dessous pour débuter l'expérience.</p>
            </div>
      </div>

      <div class="row row-top-margin row-bottom-margin">
            <div class="col-md-12 text-center">
                  <button class="btn btn-primary btn-lg" id="take_button" onclick='window.location.href = "register.php";'>Débuter expérience</button>
            </div>
      </div>


</div>

<!-- <script>
document.getElementById("take_button").focus();
</script> -->

</body>


</html>