<!DOCTYPE html>
<html>

<head>

<title>Dépôt</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container mt-5">


<h2>
Faire un dépôt
</h2>



<form method="post" action="/client/depot">


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



<button class="btn btn-success">

Valider dépôt

</button>



<a href="/client/dashboard"
class="btn btn-secondary">

Retour

</a>


</form>



</div>


</body>

</html>