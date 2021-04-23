<?php
session_start();
$b=false;
foreach($_SESSION['list'] as $key=>$val){
    if($_POST['username']==$key){
        echo "ce nom existe deja ";
    $b=true;}
}
if($b==false){
    header("location:login.php");
$_SESSION['list']["${_POST['username']}"]=$_POST['password'];}