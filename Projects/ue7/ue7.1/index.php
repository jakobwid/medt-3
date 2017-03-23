<?php
/**
 * Created by PhpStorm.
 * User: jwidh
 * Date: 01.02.2017
 * Time: 14:40
 */

?>


<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Grid Generator</h1>
        <form action="<?php echo "$_SERVER[PHP_SELF]"; ?>" method="post">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Monday"> Monday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Tuesday"> Tuesday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Wednesday"> Wednesday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Thursday"> Thursday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Friday"> Friday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Saturday"> Saturday
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="week[]" value="Sunday"> Sunday
                </label>
            </div>
            <div class="form-group row">
                <div class="col-xs-3">
                    <label>Number of fields</label>
                    <input type="text" name="number" class="form-control" required>
                </div>
            </div>
            <button type="submit" name="sbmbtn" class="btn btn-default">Generate</button>
        </form>
    </div>
<?php
if(isset($_POST['sbmbtn']) && isset($_POST['week'])){
        echo '<hr><div class="row"><div class="col-xs-1"><h4>Day</h4></div>';
        for($i=0; $i< $_POST['number']; $i++){
            echo '<div class="col-xs-1"><h4>Event '.($i+1).'</h4></div>';
        }
        echo '</div><br>';
        for($i = 0; $i < sizeof($_POST['week']); $i++){
            echo '<div class="row"><div class="col-xs-1">'.$_POST['week'][$i].'</div>';
            for($j = 0; $j < $_POST['number']; $j++){

                echo '<div class="col-xs-1">event'.($i+1).'.'.($j+1).'</div>';
            }
            echo '</div><br>';
        }
    }
?>
</div>
</body>
</html>
