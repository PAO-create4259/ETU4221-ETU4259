<!DOCTYPE html>
<html>

<head>

<title>Historique</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>


<div class="container mt-5">


<h2>
Historique des opérations
</h2>



<table class="table table-bordered">


<tr>

<th>Date</th>

<th>Type</th>

<th>Montant</th>

<th>Frais</th>

</tr>



<?php foreach($operations as $op): ?>


<tr>


<td>

<?= $op['date_operation']; ?>

</td>


<td>

<?= $op['type']; ?>

</td>


<td>

<?= $op['montant']; ?> Ar

</td>


<td>

<?= $op['frais']; ?> Ar

</td>



</tr>



<?php endforeach; ?>


</table>



<a href="/client/dashboard"
class="btn btn-secondary">

Retour

</a>



</div>


</body>

</html>