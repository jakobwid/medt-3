<?php
/**
 * Created by PhpStorm.
 * User: Jakob Weedhalm
 * Date: 27.10.2016
 * Time: 12:08
 */


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
    <style>
        *{margin: 0; padding: 0;}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class=" col-sm-push-2 col-xs-12 col-sm-7 col-md-4">
        <h1 >Jakob Widhalm</h1>
            <form action="http://127.0.0.1/medt/ue4/ue4.2" method="Post">
                <div class="form-group">
                    <label for="exampleInputPassword1" >Vorname</label>
                    <input type="text" class="form-control" name="vn" id="exampleInputPassword1" placeholder="Vorname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nachname</label>
                    <input type="text" class="form-control" name="nn" id="exampleInputPassword1" placeholder="Nachname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-default " value="Anmelden" name="submitBtn">Submit</button>
            </form>
        </div>
    </div>
    
<?php
if(isset($_Post['email']))
                {
?>
    <div class="row" style="margin-top:50px;">
        <div class="col-sm-push-2 col-xs-12 col-sm-7 col-md-4">
            <div style="background-color: rgba(0,255,0,0.4);" class="panel panel-default">
              <div class="panel-heading">Your input</div>
              <div class="panel-body">
                <?php
                if(isset($_Post['vn']))
                {
                    echo "<p><span style='font-weight: bold;'>Vorname:</span> " .$_Post['vn']."</p>";
                }
                ?>

              </div>
              <div class="panel-body">
                <?php
                if(isset($_Post['nn']))
                {
                    echo "<p><span style='font-weight: bold;'>Nachname:</span>  ".$_Post['nn']. "</p>";
                }
                ?>
              </div>
              <div class="panel-body">
                <?php

                if(isset($_Post['email']))
                {
                     echo "<p><span style='font-weight: bold;'>Email:</span>  " .$_Post['email']."</p>";
                }
                ?>
              </div>
            </div>
        </div>
    </div>
    <?php
}
    ?>
</div>

</body>
</html>