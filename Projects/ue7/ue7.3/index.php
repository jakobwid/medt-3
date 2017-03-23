
    <html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <title>Datenbankzugriff</title>

        <style>
            ul.pagination li a{
                height: 2.4em;
            }

        </style>
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
            $dbname = 'happycustomer';
            $user = 'root';
            $pwd = '';

            try{
                $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
            }
            catch (PDOException $e){
                exit("<p class='bg-danger' style='text-align: center; font-size: 30pt;'>System nicht verfügbar!</p>");
            }

            $res = $db->query("SELECT COUNT(*) FROM customers");
            $temp = $res->fetchColumn();
            $anzahl = ceil($temp / 20);

            if(!isset($_GET['num'])){
                $res = $db->query("SELECT * FROM customers LIMIT 0,20");
            }
            else if(isset($_GET['num'])&&($_GET['num']>-1)&&($_GET['num']<$anzahl)){
                $res = $db->query("SELECT * FROM customers LIMIT ".($_GET['num']*20).",20");
            }
            else if(($_GET['num']<0)){
                $res = $db->query("SELECT * FROM customers LIMIT 0,20");
            }
            else if(($_GET['num']>($anzahl-1))){
                $res = $db->query("SELECT * FROM customers LIMIT ".(($anzahl-1)*20).",20");
            }


            //$temp = array
            $tmp = $res->fetchAll(PDO::FETCH_OBJ);



            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 style="text-align: center;">Pagination</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Firma</td>
                        <td>Nachname</td>
                        <td>Vorname</td>
                        <td>Telefonnummer</td>
                        <td>Adresse</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tmp as $row){
                        echo "<tr>
                                <td>".$row->customerName."</td> 
                                <td>".$row->contactLastName."</td>
                                <td>".$row->contactFirstName."</td>
                                <td>".$row->phone."</td>
                                <td>".$row->addressLine1."</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>



                        <?php

                        ?>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li><a href="<?php echo $_SERVER['PHP_SELF']."?num=0";?>"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span></a></li>
                    <li>
                        <a href="<?php echo $_SERVER['PHP_SELF']."?num=".($_GET['num']-1);?>" aria-label="Previous">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                    </li>

                    <?php
                        for($i = 0; $i<$anzahl; $i++){
                            echo '<li><a href="'.$_SERVER["PHP_SELF"].'?num='.$i.'">'.($i+1).'</a></li>';
                        }

                    ?>


                    <li>
                        <a href="<?php echo $_SERVER['PHP_SELF']."?num=".($_GET['num']+1);?>" aria-label="Next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li><a href="<?php echo $_SERVER['PHP_SELF']."?num=".($anzahl-1);?>"><span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span></a></li>
                </ul>
            </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
    </body>
</html>
