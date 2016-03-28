<?php include('../register_header.php') ?>
<!DOCTYPE HTML> 
<html>
<head>
      <meta charset="UTF-8">
      <title>Έρευνα σχετικά με την Ανίχνευση Ψεύδους</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
</head>

<body> 

      <div class="container">

            <div class="row row-top-margin text-center">
                  <div class="col-md-12">
                        <h1>Καλώς ήρθατε στην έρευνά μας</h1>
                  </div>
            </div>

            <div class="row row-top-margin">
                  <div class="col-md-8 col-md-offset-2">
                        <p class="lead">
                              Για να ξεκινήσετε την έρευνα, πρέπει να συμπληρώσετε τα παρακάτω στοιχεία.
                              Όλες οι πληροφορίες που θα δώσετε είναι εμπιστευτικές και θα χρησιμοποιηθούν 
                              ομαδοποιημένες αποκλειστικά για ακαδημαϊκούς σκοπούς.<br>
                        </p>
                  </div>
            </div>

            <form class="form-horizontal row-top-margin" action="training.php" method="post">
                  <fieldset>
                        <div class="form-group">
                              <label for="age" class="col-sm-2 control-label">Ηλικία</label>
                              <div class="col-sm-10">
                                    <input type="number" name="age" min="18" max="99" value="23" class="form-control" id="age">
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Φύλο</label>
                              <div class="col-sm-10">
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="male" checked> Άνδρας
                                    </label>
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="female"> Γυναίκα
                                    </label>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="degree" class="col-sm-2 control-label">Τίτλος Σπουδών</label>
                              <div class="col-sm-10">
                                    <select class="form-control" name="degree" id="degree">
                                          <option value="none">Κανένας</option>
                                          <option value="baccalaureate">Απολυτήριο Λυκείου</option>
                                          <option value="bachelor">Πτυχίο Πανεπιστημίου ή ΤΕΙ</option>
                                          <option value="masters">Μεταπτυχιακό</option>
                                          <option value="phd">Διδακτορικό</option>
                                          <option value="other">Άλλο</option>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="origin_country" class="col-sm-2 control-label">Χώρα καταγωγής</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="origin_country" name="origin_country">
                                          <?php
                                          $countries = fopen("countries.txt","r");
                                          while($line = fgets($countries,1024)) {
                                                $line = explode(';',$line);
                                                if ($line[1]=='GR') echo '<option value='.$line[1].' selected="selected">'.$line[2].'</option>';
                                                else echo '<option value='.$line[1].'>'.$line[2].'</option>';
                                          }
                                          ?>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="residence_country" class="col-sm-2 control-label">Χώρα διαμονής</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="residence_country" name="residence_country">
                                          <?php
                                          $countries = fopen("countries.txt","r");
                                          while($line = fgets($countries,1024))
                                          {
                                                $line = explode(';',$line);
                                                if ($line[1]=='GR') echo '<option value='.$line[1].' selected="selected">'.$line[2].'</option>';
                                                else echo '<option value='.$line[1].'>'.$line[2].'</option>';
                                          }
                                          ?>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" value="Submit" class="btn btn-primary">Υποβολή</button>
                              </div>
                        </div>
                  </fieldset>
            </form>

      </div>
</body>
</html>