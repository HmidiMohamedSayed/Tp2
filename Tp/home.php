<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">

</head>
<h1>Bonjour a vous Nous allons manipuler une base de donnée Des etudiants</h1>
<br>

<a href="ajouterPersonne.php" >  <input type="button" value="ajouterPersonne"></a>
    <a href="modifier.php" ><input type ="button" value="modifierPersonne"></a>


<?php
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personnes = $personneRepository->findAll();
?>
<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php foreach ($personnes as $personne) {
        ?>
        <tr id="var$i">
            <form action="pp.php" method="post">
            <td><input type="text" name="firstname" value="<?= $personne->firstname ?>" readonly></td>
                <td><input type="text" name="name" value="<?= $personne->name ?>" readonly></td>
                <td><input type="text" name="age" value="<?= $personne->age ?>" readonly></td>
                <td><input type="submit" value="supprimer"></td>
            </form>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>