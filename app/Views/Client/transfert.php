<!DOCTYPE html>
<html>

<head>

<title>Transfert</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>


<div class="container mt-5">


<h2>
Faire un transfert
</h2>



<form method="post" action="/client/transfert">



<div class="mb-3">

<label>
Numéro destinataire
</label>


<input 
type="text"
name="numero"
class="form-control"
placeholder="034xxxxxxx"
required>


</div>



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



<button class="btn btn-info">

Envoyer

</button>



<a href="/client/dashboard"
class="btn btn-secondary">

Retour

</a>



</form>


</div>


</body>

</html>