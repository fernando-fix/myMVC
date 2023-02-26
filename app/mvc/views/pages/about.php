<?php $this->partial('header'); ?>
<?php $this->partial('aside'); ?>

<table border="1" style="width:50%">
    <thead>
        <th>id</th>
        <th>nome</th>
        <th>idade</th>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $this->partial('ad', ['anuncio1' => 'Bolo de pote 10 reais']); ?>
<?php $this->partial('ad', ['anuncio2' => 'Cerveja 15 reais']); ?>

<?= "Token: " . $token . "<br>"; ?>
<?= "LoggedUser: " . $loggedUser; ?>

<?php $this->partial('footer'); ?>