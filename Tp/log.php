<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$b=false;
if (isset($username)&&isset($password)) {
    foreach($_SESSION['list'] as $key=>$val){
        if($key==$username && $val==$password){
            $b=true;
            header("location:home.php");
        }}
           if($b==false){
               $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
               header('location:login.php');
        }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}