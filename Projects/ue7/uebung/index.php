<?php
/**
 * Created by PhpStorm.
 * User: jwidh
 * Date: 16.03.2017
 * Time: 13:25
 */


$host = 'localhost';
$dbname = 'medt3';
$user = 'root';
$passwd = '';

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
}
catch (PDOException $e){
   die("ups");
}
/*
if(isset($_GET['chan'])){
    $name = $_GET['name'];
    $db->query("UPDATE project SET name='$name' WHERE id = ".$_GET['chan']);
}

if(isset($_GET['change'])) {
    $res = $db->query("SELECT * FROM project WHERE id = ".$_GET['change']);
    $temp = $res->fetch();
    echo $temp['id'];
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="text" name="name" value="<?php echo $temp['name'];?>">
         <button type="submit" type="submit" name="chan" value="<?php echo $temp['id']; ?>">
            Submit
        </button>
    </form>

    <?php
}


$res = $db->query("SELECT * FROM project");
$temp = $res->fetchAll();
foreach ($temp as $t){
    echo "<p>".$t['id']." ".$t['name']." <span><a href=\"".$_SERVER['PHP_SELF']."?change=".$t['id']."\">A</a></span></p>";
}
 */

if(isset($_GET['delet'])){
    $id = $_GET['delet'];
    $db->query("DELETE FROM project WHERE id=$id");
}

if(isset($_GET['change'])){
    $res = $db->query("SELECT * FROM project WHERE id=".$_GET['change']);
    $temp = $res->fetch();
    echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"get\">";
    echo "<input type=\"text\" name=\"name\" value=\"".$temp['name']."\"> ";
    echo "</form>";

}

if(isset($_GET['chan'])){
    $name = $_GET['name'];
    $id = $_GET['chan'];
    $db->query("UPDATE project SET name=$name WHERE id = $id");
}

$res = $db->query("SELECT * FROM project");
$temp = $res->fetchAll();

foreach ($temp as $t){
    echo "<p>".$t['id']." ".$t['name']."<a href=\"". $_SERVER['PHP_SELF']."?delet=".$t['id']."\"><span>Delete</span></a>||<a href=\"". $_SERVER['PHP_SELF']."?change=".$t['id']."\"><span>Change</span></a></p>";

}
?>



