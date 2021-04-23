<?php
session_start();
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personneRepository->modifier($_POST['firstname'],$_POST['name'],$_POST['age'],$_SESSION['firstname'],$_SESSION['name'],$_SESSION['age']);
header("location:home.php");
?>