<?php
/**
 * Created by PhpStorm.
 * User: jwidh
 * Date: 16.03.2017
 * Time: 12:29
 */


$host = 'localhost';
$dbname = 'happycustomer';
$user = 'root';
$passwd = '';

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
}
catch (PDOException $ex){
    die($ex);
}

$res = $db->query("SELECT * FROM customers");
$temp = $res->fetchAll(PDO::FETCH_OBJ);
echo $temp[0]->customerNumber;

$res = $db->query("SELECT customerName FROM customers WHERE customerNumber=103");
$temp = $res->fetchColumn();
echo $temp;

#$res = $db->query("SELECT * FROM customers");
#$temp = $res->fetchAll(PDO::FETCH_OBJ);
#foreach ($temp as $row){
#    echo "<p>".$row->customerName." ".$row->contactFirstName."</p>";
#}


$res = $db->query("SELECT * FROM customers WHERE customerNumber=103");
$temp = $res->fetch();
echo $temp['addressLine1'];