<?php
/**
 * Created by PhpStorm.
 * User: jwidh
 * Date: 15.03.2017
 * Time: 10:41
 */


$host ='localhost';
$dbname ='medt3';
$user = 'htuser';
$pwd = 'toor';

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
}
catch (PDOException $ex){
    exit($ex);
}

$res = $db->query("SELECT * FROM project");

$temp = $res->fetchAll(PDO::FETCH_OBJ);

foreach ($temp as $te){
    echo "<p>";
    foreach ($te as $t){
        echo $t;
    }
    echo "</p>";
}



















