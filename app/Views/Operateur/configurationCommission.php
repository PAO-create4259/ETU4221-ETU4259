<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Configuration des commissions</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>

<body>

<div class="container mt-4">

<div class="mm-topbar">

<div>

<h2>
Configuration des commissions
</h2>

<div class="subtitle">

Transfert entre opérateurs

</div>

</div>

</div>

<div class="mm-card">

<?php if(session()->getFlashdata('success')): ?>

<div class="alert alert-success">

<?= session()->getFlashdata('success'); ?>

</div>

<?php endif; ?>

    <table class="table mm-table">
        <thead>
        <tr>
        <th>Source</th>
        <th>Destination</th>
        <th>Commission (%)</th>
        <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($commissions as $commission): ?>
        <tr>
        <form
        method="post"
        action="<?= site_url('operateur/commission/update/'.$commission['id_commission']) ?>">
        <td>
        <?= esc($commission['source']) ?>
        </td>
        <td>
        <?= esc($commission['destination']) ?>
        </td>
        <td width="180">
        <input
        type="number"
        step="0.01"
        name="pourcentage"
        value="<?= $commission['pourcentage'] ?>"
        class="form-control">
        </td>
        <td>
        <button
        class="btn-mm">

        Enregistrer

        </button>

        </td>

        </form>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>
</div>
</body>
</html>