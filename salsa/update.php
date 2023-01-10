<?php

session_start();
$id=$_POST['id'];
$nis=$_POST['nis'];
$name=$_POST['name'];
$class=$_POST['class'];

$db = new pdo("mysql:host=localhost;dbname=datasiswa","root","");
$query = $db->query("UPDATE `tbdatasiswa` SET `nis`='$nis',`name`='$name',`class`='$class' WHERE `id`='$id'");

if($query){
    header("location:home.php");
}