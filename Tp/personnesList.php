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
    <tr>
        <td><?= $personne->firstname ?></td>
        <td><?= $personne->name ?></td>
        <td><?= $personne->age ?></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>