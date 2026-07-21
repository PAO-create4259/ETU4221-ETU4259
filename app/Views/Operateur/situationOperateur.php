<!DOCTYPE html>
<html>

<head>

<title>
Situation opérateur
</title>


<link rel="stylesheet" href="<?= base_url('css/styleclient.css') ?>">


</head>


<body>

<div class="mm-topbar">

    <div>
        <h2>Administration Opérateur</h2>
        <div class="subtitle">
            Gestion Mobile Money
        </div>
    </div>


    <div class="mm-nav">

        <a href="<?= base_url('operateur/dashboard') ?>">
            Dashboard
        </a>


        <a href="<?= base_url('operateur/configuration-prefixe') ?>">
            Préfixes
        </a>


        <a href="<?= base_url('operateur/commission') ?>">
            Commissions
        </a>


        <a href="<?= base_url('operateur/situation') ?>">
            Situation
        </a>


    </div>

</div>

<div class="container">


<div class="mm-topbar">

<h1>
Situation des montants opérateurs
</h1>

</div>



<div class="mm-card">


<table class="table mm-table">


<thead>

<tr>

<th>
Opérateur source
</th>

<th>
Opérateur destination
</th>

<th>
Montant à envoyer
</th>

<th>
Date
</th>


</tr>

</thead>



<tbody>


<?php foreach($situations as $s): ?>


<tr>


<td>

<?= $s['source'] ?>

</td>


<td>

<?= $s['destination'] ?>

</td>


<td>

<span class="mm-money">
    <?= $s['montant'] ?> Ar
</span>

</td>


<td>

<span class="mm-date">
    <?= $s['date_situation'] ?>
</span>

</td>



</tr>


<?php endforeach; ?>


</tbody>


</table>


</div>


</div>


</body>

</html>