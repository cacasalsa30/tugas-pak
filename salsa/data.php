<?php

$nis = $_POST['nis'];
$name = $_POST['name'];
$class = $_POST['class'];

$db = new pdo("mysql:host=localhost;dbname=datasiswa","root","");
$query = $db->query("INSERT INTO `tbdatasiswa` values ('', '$nis','$name','$class')");

if($query){
    header("location:home.php");
}
