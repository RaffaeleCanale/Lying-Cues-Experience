<?php require('../register_header.php') ?>
<!DOCTYPE HTML> 
<html>
<head>
      <meta charset="UTF-8">
      <title>SHS Survey :: Detecting lying faces</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
</head>

<body> 

      <div class="container">

            <div class="row row-top-margin text-center">
                  <div class="col-md-12">
                        <h1>Welcome to our survey</h1>
                  </div>
            </div>

            <div class="row row-top-margin">
                  <div class="col-md-8 col-md-offset-2">
                        <p class="lead">
                              To initiate the survey, you have to provide below the required information.<br>
                              Note that all this information is kept confidential,
                              and is only used in an aggregate way for academic purposes only.<br>
                        </p>
                  </div>
            </div>

            <form class="form-horizontal row-top-margin" action="training.php" method="post">
                  <fieldset>
                        <div class="form-group">
                              <label for="age" class="col-sm-2 control-label">Age</label>
                              <div class="col-sm-10">
                                    <input type="number" name="age" min="18" max="99" value="23" class="form-control" id="age">
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="male" checked> Male
                                    </label>
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="female"> Female
                                    </label>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="degree" class="col-sm-2 control-label">Degree</label>
                              <div class="col-sm-10">
                                    <select class="form-control" name="degree" id="degree">
                                          <option value="none">None</option>
                                          <option value="baccalaureate">Baccalaureate</option>
                                          <option value="bachelor">Bachelor</option>
                                          <option value="masters">Masters</option>
                                          <option value="phd">PhD</option>
                                          <option value="other">Other</option>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="origin_country" class="col-sm-2 control-label">Country of origin</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="origin_country" name="origin_country">
                                          <?php
                                          $countries = fopen("countries.txt","r");
                                          while($line = fgets($countries,1024)) {
                                                $line = explode(';',$line);
                                                if ($line[1]=='CH') echo '<option value='.$line[1].' selected="selected">'.$line[2].'</option>';
                                                else echo '<option value='.$line[1].'>'.$line[2].'</option>';
                                          }
                                          ?>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="residence_country" class="col-sm-2 control-label">Country of residence</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="residence_country" name="residence_country">
                                          <?php
                                          $countries = fopen("countries.txt","r");
                                          while($line = fgets($countries,1024))
                                          {
                                                $line = explode(';',$line);
                                                if ($line[1]=='CH') echo '<option value='.$line[1].' selected="selected">'.$line[2].'</option>';
                                                else echo '<option value='.$line[1].'>'.$line[2].'</option>';
                                          }
                                          ?>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                              </div>
                        </div>
                  </fieldset>
            </form>

      </div>
</body>
</html>