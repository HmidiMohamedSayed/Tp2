<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">

</head>
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
        <tr >
            <form action="modif.php" method="post">
            <td><input type="text" name="firstname" value="<?= $personne->firstname ?>"></td>
                <td><input type="text" name="name" value="<?= $personne->name ?>"></td>
                <td><input type="text" name="age" value="<?= $personne->age ?>"></td>
                <td><input type="submit" value="modifier"></td>
            </form>
        </tr>
        <?php
    }
    ?>
</table>
