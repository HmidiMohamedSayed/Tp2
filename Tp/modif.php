<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">

</head>
<?php
session_start();
$_SESSION['firstname']=$_POST['firstname'];
$_SESSION['name']=$_POST['name'];
$_SESSION['age']=$_POST['age'];
?>
<form action="valider.php" method="post">

    <label for="name">Nom :</label>
    <input type="text" name="name" >

    <label for="firstname" >Prenom :</label>
    <input type="text" name="firstname" >
    <label for="age" >Age :</label>
    <input type="text" name="age" >
    <input type="submit" value="valider">
</form>