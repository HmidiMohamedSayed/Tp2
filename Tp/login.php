
<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">

</head>
<?php
session_start();
if(isset($_SESSION['errorMessage'])){
echo $_SESSION['errorMessage'];
    unset($_SESSION['errorMessage']);
}
?>
<form action="log.php" method="post">

    <label for="username">Username :</label>
    <input type="text" name="username" >

    <label for="password" >Password :</label>
    <input type="password" name="password" >
    <input type="submit">
</form>