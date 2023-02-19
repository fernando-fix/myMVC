<?php $this->partial('header'); ?>
<?php $this->partial('aside'); ?>

<table border="1" style="width:100%">
    <thead>
        <th>id</th>
        <th>nome</th>
        <th>idade</th>
    </thead>
    <tbody>
        <td><?= $id; ?></td>
        <td><?= $name; ?></td>
        <td><?= $age; ?></td>
    </tbody>
</table>

<?php $this->partial('ad', ['anuncio1' => 'Bolo de pote 10 reais']); ?>
<?php $this->partial('ad', ['anuncio2' => 'Cerveja 15 reais']); ?>

<?php $this->partial('footer'); ?>