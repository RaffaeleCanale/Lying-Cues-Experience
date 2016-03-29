<?php require('../register_header.php') ?>
<!DOCTYPE HTML> 
<html>
<head>
      <meta charset="UTF-8">
      <title>Étude SHS :: Détection de mensonges</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
</head>

<body> 

      <div class="container">

            <div class="row row-top-margin text-center">
                  <div class="col-md-12">
                        <h1>Bienvenu(e) à notre expérience</h1>
                  </div>
            </div>

            <div class="row row-top-margin">
                  <div class="col-md-8 col-md-offset-2">
                        <p class="lead">
                              Pour participer à l'expérience, nous vous demandons de fournir quelques informations.<br>
                              Notez que ces informations restent confidentielles et sont utilisées uniquement à des fins académiques.<br>
                        </p>
                  </div>
            </div>

            <form class="form-horizontal row-top-margin" action="training.php" method="post">
                  <fieldset>
                        <div class="form-group">
                              <label for="age" class="col-sm-2 control-label">Âge</label>
                              <div class="col-sm-10">
                                    <input type="number" name="age" min="18" max="99" value="23" class="form-control" id="age">
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Genre</label>
                              <div class="col-sm-10">
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="male" checked> Homme
                                    </label>
                                    <label class="radio-inline">
                                          <input type="radio" name="gender" id="gender" value="female"> Femme
                                    </label>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="degree" class="col-sm-2 control-label">Diplôme</label>
                              <div class="col-sm-10">
                                    <select class="form-control" name="degree" id="degree">
                                          <option value="none">Aucun</option>
                                          <option value="baccalaureate">Baccalauréat</option>
                                          <option value="bachelor">Bachelor</option>
                                          <option value="masters">Masters</option>
                                          <option value="phd">PhD</option>
                                          <option value="other">Autre</option>
                                    </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="origin_country" class="col-sm-2 control-label">Pays d'origine</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="origin_country" name="origin_country">
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
                              <label for="residence_country" class="col-sm-2 control-label">Pays de résidence</label>
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
                                    <input type="submit" value="Confirmer" class="btn btn-primary">
                              </div>
                        </div>
                  </fieldset>
            </form>

      </div>
</body>
</html>