<?php

$id=$_GET["id"];
$db=new PDO("mysql:host=localhost;dbname=datasiswa",'root','');
$query=$db->query("DELETE FROM `tbdatasiswa` WHERE id='$id'");
if($query){
    header('location:home.php');
}