<?php
    session_start();

    include('../db_connection.php'); // Creates a connection $conn
    include('../constants.php');

    // Redirect URL
    $redirect_page = 'video';


    $sql = "UPDATE Users SET properly_finished=true WHERE id=" . $_SESSION["userId"];
    if ($conn->query($sql) === FALSE) {
        // Well, not the end of the world...    
    }

    $conn->close();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset='utf-8'>
      <title>Étude SHS :: Détection de mensonges</title> 
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">      
</head>

<body>
    <div class="container">

        <div class="row row-top-margin text-center">
            <div class="col-md-12">
                <h1>Première expérience terminée</h1>
            </div>
        </div>

        <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">Vos réponses ont été correctement enregistrées.</p>            
                <p class="lead">Cliquez sur le bouton ci-dessous pour passer à la prochaine expérience.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                  <button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Expérience suivante</button>
            </div>
      </div>

    </div>
</body>
</html>