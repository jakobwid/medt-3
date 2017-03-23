
    <html>
    <head>

        <style>
            h1{text-align: center;}
            tr:nth-child{background-color: gray;}
            .glyphicon-trash{margin-right: 10px;}
            .glyphicon-trash:hover{color:red;}

        </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->


        <title>Datenbankzugriff</title>
        <meta charset="utf-8">
    </head>
    <body>

    <div class="container">

        <div class="row">

            <?php
            /**
             * Created by PhpStorm.
             * User: jwidh
             * Date: 02.02.2017
             * Time: 16:25
             */

            $host = 'localhost';
            $dbname = 'medt3';
            $user = 'htuser';
            $pwd = 'toor';

            try{
                $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
            }
            catch (PDOException $e){
                exit("<p class='bg-danger' style='text-align: center; font-size: 30pt;'>System nicht verfügbar!</p>");
            }

            ;

            if(isset($_GET['new'])){
                $res = $db->query("INSERT INTO project VALUES (null, '".$_GET['name']."', '". $_GET['description']."', '".$_GET['date']."');");
            }


            if(isset($_GET['chan'])){
                // $res = $db->query("UPDATE project SET name = '".$temp[0]->name."', description = '".$temp[0]->description."', createDate ='".$temp[0]->createDate."' WHERE id = ".$temp[0]->id);
                $res = $db->query("UPDATE project SET name = '".$_GET['name']."' , description = '".$_GET['description']."' , createDate= '".$_GET['date']."' WHERE id = ".$_GET['chan']);


            }

            if(isset($_GET['del'])){
                $res = $db->query("DELETE FROM project WHERE id=".$_GET['del']);
            }

            $res = $db->query("SELECT * FROM project");
            //$temp = array
            $tmp = $res->fetchAll(PDO::FETCH_OBJ);



            ?>
            <h1>Datenbankzugriff auf medt3</h1>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?change"><button type="submit" name="bestätigung" value="" class="btn btn-default">New Entry</button></a>
            <br><br>
            <div class="table-responsive">

            <table class="table table-bordered table-striped" >
                <thead>
                <tr><td>Name</td><td>Beschreibung</td><td>Datum</td><td>Operationen</td></tr>
                </thead>
                <tbody>
                <?php

                foreach ($tmp as $row){
                    echo "<tr>
                            <td>".$row->name."</td>
                            <td>".$row->description."</td>
                            <td>".$row->createDate."</td>
                            <td>
                            <a href='".$_SERVER['PHP_SELF']."?del=$row->id'>
                            <span class='glyphicon glyphicon-trash'></span>
                            </a>
                            <a href='".$_SERVER['PHP_SELF']."?change=$row->id'>
                            <span class='glyphicon glyphicon-pencil' style='color:green;'>
                            </span>
                            </a>
                            </td>
                          </tr>";
                }
                ?>
                </tbody>
            </table>

            </div>
            


            <?php




            if(isset($_GET['change'])) {
                if($_GET['change']== null)
                {
                    $res = $db->query("SELECT * FROM project");
                    $temp = $res->fetchColumn(PDO::FETCH_OBJ);
                    $id = 0;
                    $name = "";
                    $description ="";
                    $createDate = "";
                    $bestätigung = "new";
                }
                else{

                    $res = $db->query("SELECT * FROM project WHERE id=" . $_GET['change']);
                    $temp = $res->fetch(PDO::FETCH_OBJ);
                    $id = $temp->id;
                    $name = $temp->name;
                    $description = $temp->description;
                    $createDate = $temp->createDate;
                    $bestätigung = "chan";
                }


                ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label>Projektname:</label>
                        <input type="text" name="name" class="form-control" style="width: 200px;"
                               value="<?php echo  $name?>">

                    </div>
                    <div class="form-group">
                        <label>Beschreibung:</label>
                        <input type="text" name="description" class="form-control" style="width: 200px;"
                               value="<?php echo $description; ?>">
                    </div>
                    <div class="form-group">
                        <label>Datum:</label>
                        <input type="text" name="date" class="form-control" style="width: 200px;"
                               value="<?php echo $createDate ; ?>">
                    </div>
                    <button type="submit" name="<?php echo $bestätigung; ?>" value="<?php echo $id; ?>"
                            class="btn btn-default">Submit
                    </button>
                </form>

                <?php
            }

            ?>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
    </body>
</html>
