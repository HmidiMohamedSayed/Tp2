<?php
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personnes = $personneRepository->supprimer($_POST['firstname'],$_POST['name'],$_POST['age']);
header("location:home.php");