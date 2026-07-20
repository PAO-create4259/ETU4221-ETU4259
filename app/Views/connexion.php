<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Connexion</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/styleclient.css') ?>">

</head>


<body class="mm-login">>

<div class="mm-login-wrap">

<div class="mm-choice-card">

<div class="mm-login-logo">
  <i class="bi bi-wallet2"></i>
</div>

<h1>Connectez-vous en tant que</h1>
<p class="mm-login-sub">Choisissez votre profil pour continuer</p>

<div class="choice-container">

<a href="<?= base_url('operateur/dashboard') ?>" class="mm-choice-btn btn-operateur">
  <div class="mm-choice-icon"><i class="bi bi-speedometer2"></i></div>
  <div>Opérateur</div>
  <i class="bi bi-chevron-right mm-choice-arrow"></i>
</a>

<a href="<?= base_url('client/login') ?>" class="mm-choice-btn btn-client">
  <div class="mm-choice-icon"><i class="bi bi-person-fill"></i></div>
  <div>Client</div>
  <i class="bi bi-chevron-right mm-choice-arrow"></i>
</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>