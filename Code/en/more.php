<?php
include('../constants.php');

$redirect_page = END_REDIRECT_PAGE;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>SHS Survey :: Detecting lying faces</title>
</head>

<body>
    <div class="container">

        <div class="row row-top-margin text-center">
            <div class="col-md-12">
                <h1>Detecting Trusworthy Faces</h1>
            </div>
        </div>

        <div class="row row-top-margin text-center">
            <div class="col-md-12">
                <p class="lead important-text">
                    Please return to the home page (using the button below) when you are finished reading.
                </p>
            </div>
        </div>

        <div class="row row-top-margin text-center">
            <div class="col-md-12">
                <h2>Debriefing</h2>
            </div>
        </div>

        <div class="row row-top-margin">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">It is easy to imagine why humans are interested in the detection of lies as for instance in personal interactions or when it comes to possible breaches of law. Yet, when people seem sensitive to lying indices, they are certainly equally sensitive to whom they should trust. The scientific literature offers lists of facial and non-facial cues that are thought to help in the identification of lying and trustworthy behavior. Furthermore, attempts have been made to develop machines that are able to separate liars from those telling the truth. However, such machines have been found to be much less reliable than humans were found to be. Presumably, humans are better at detecting the intention of other people relying on cues that are not readily available to our overt decision-making. The present study is aimed to test the contribution of such potential cues to the detection of trustworthiness.</p>
                <p class="lead">
                    Humans can perform decisions very quickly, taking one or more aspects of the presented information into consideration. Some of the information might be accessible to the person, while others might be covert. Recent studies have shown that the presentation of inconsistent information can impede on this quick, automated processing style. In the present case, this would mean that we not only present cues that are thought to indicate trustworthiness, but add other features that are commonly thought to be neutral or to even indicate lying. In more detail, we did this by superimposing on a single face picture i) cues of honesty, ii) cues of honesty and deception, and iii) cues of deception. We would expect the mixed stimuli to convey inconsistent information interfering with the decision making process as reflected by enhanced reaction times.
                </p>
                <p class="lead">
                    If you are interested in our work, or would like to know our results and findings (when they become available), or if you have any other question, suggestion, remark, or comment, feel free to contact us at <a href="mailto:mathieu.arminjon@unige.ch">mathieu.arminjon@unige.ch</a>.
                </p>
            </div>
        </div>

        <div class="row row-top-margin row-bottom-margin">
            <div class="col-md-12 text-center">
              <button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Home page</button>
          </div>
      </div>

  </div>

</body>
</html>