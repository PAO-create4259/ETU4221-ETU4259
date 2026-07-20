<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Connexion Mobile Money</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/styleclient.css') ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="mm-login">

<div class="mm-login-card">

<h2 class="mm-login-title">

<i class="fa-solid fa-mobile-screen-button"></i>

Connexion Client

</h2>

<?php if(session()->getFlashdata('erreur')): ?>

<div class="alert alert-danger">

<?= session()->getFlashdata('erreur'); ?>

</div>

<?php endif; ?>

<form method="post" action="/client/authentification">

<div class="mb-4">

<label class="form-label">

Numéro de téléphone

</label>

<input

type="text"

name="numero"

class="form-control"

placeholder="0341234567"

required>

</div>

<button class="btn-mm w-100">

<i class="fa-solid fa-right-to-bracket"></i>

Se connecter

</button>



</form>
<a href="<?= base_url('/') ?>" class="mm-choice-btn btn-operateur">
  <i class="bi bi-speedometer2"></i></div>
  <div>Retour</div>
  <i class="bi bi-chevron-right mm-choice-arrow"></i>
</a>



</div>


</body>

</html>