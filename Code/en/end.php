<?php
session_start();

	include('../db_connection.php'); // Creates a connection $conn
    include('../constants.php');

    $redirect_page = 'index.php?' . (SHOW_DOTS ? 'dots' : 'no_dots');

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
      <title>SHS Survey :: Detecting lying faces</title> 
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">

      <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", init, false);

        function init() {
            setTimeout(function() {
                window.location.href = "<?php echo $redirect_page ?>";
            }, <?php echo END_REDIRECT_DELAY ?>);
        }
    </script>
</head>

<body>
    <div class="container">

        <div class="row row-top-margin text-center">
            <div class="col-md-12">
                <h1>Thank You !</h1>
            </div>
        </div>

        <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">Thank you for taking part in our study. Your answers were successfully recorded.</p>
                <p class="lead">If you are interested to know more about our study, <a href="more.php">click here</a>.</p>
            </div>
        </div>

        <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead row-top-margin important-text">You'll be redirected to the home page in <?php echo END_REDIRECT_DELAY/1000 ?> seconds...</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                  <button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Home page</button>
            </div>
      </div>

    </div>
</body>
</html>