<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Configuration des préfixes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/styleclient.css')?>">

</head>

<body>

<div class="container mt-5">

    <div class="mm-topbar">

    <h2>Configuration des préfixes</h2>

</div>

<div class="mm-card">
<table class="table mm-table">
    <thead>

        <tr>

            <th>Préfixe</th>

            <th>Opérateur</th>

        </tr>

    </thead>

    <tbody>

        <?php foreach($prefixes as $p):?>

        <tr>

            <td><?= $p['prefixe']?></td>

            <td><?= $p['nom_operateur']?></td>

        </tr>

        <?php endforeach;?>

    </tbody>

</table>
</div>
</div>
</body>
</html>