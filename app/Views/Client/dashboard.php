<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Mon compte</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/styleclient.css') ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="mm-page">

<div class="mm-topbar">

<div>

<h2>
<i class="fa-solid fa-wallet"></i>
Mobile Money
</h2>

<div class="subtitle">
Bienvenue <?= esc($client['nom']) ?>
<h3><?= esc($client['numero']) ?></h3>
</div>


</div>

<a href="/client/logout" class="btn-mm">
<i class="fa-solid fa-right-from-bracket"></i>
Déconnexion
</a>

</div>

<div class="container">

<div class="mm-balance-card">

<h5>Solde disponible</h5>

<h2><?= number_format($client['solde'],0,","," ") ?> Ar</h2>

</div>

<div class="mm-action-grid">

<a href="/client/depot" class="mm-action-card">

<i class="fa-solid fa-plus"></i>

<h5>Dépôt</h5>

</a>

<a href="/client/retrait" class="mm-action-card">

<i class="fa-solid fa-money-bill-wave"></i>

<h5>Retrait</h5>

</a>

<a href="/client/transfert" class="mm-action-card">

<i class="fa-solid fa-right-left"></i>

<h5>Transfert</h5>

</a>

<a href="/client/historique" class="mm-action-card">

<i class="fa-solid fa-clock-rotate-left"></i>

<h5>Historique</h5>

</a>

</div>

</div>

</body>

</html>