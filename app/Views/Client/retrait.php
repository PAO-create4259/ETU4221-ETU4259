<!DOCTYPE html>
<html>

<head>

<title>Retrait</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container mt-5">


<h2>
Faire un retrait
</h2>


<?php if(session()->getFlashdata('erreur')): ?>


<div class="alert alert-danger">

<?= session()->getFlashdata('erreur'); ?>

</div>


<?php endif; ?>



<form method="post" action="/client/retrait">


<div class="mb-3">

<label>
Montant
</label>


<input 
type="number"
name="montant"
class="form-control"
required>


</div>



<button class="btn btn-warning">

Valider retrait

</button>



<a href="/client/dashboard"
class="btn btn-secondary">

Retour

</a>



</form>


</div>


</body>

</html>