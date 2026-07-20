<!DOCTYPE html>
<html>

<head>

<title>Mon compte</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<nav class="navbar navbar-dark bg-primary">

<div class="container">

<span class="navbar-brand">

Mobile Money

</span>


<a href="/client/logout"
class="btn btn-danger">

Déconnexion

</a>


</div>

</nav>



<div class="container mt-4">



<h2>
Bienvenue 
<?= $client['nom']; ?>
</h2>
<h3>

<?= $client['numero']; ?>
</h3>



<div class="card mt-4 shadow">


<div class="card-body text-center">


<h4>
Solde disponible
</h4>


<h2 class="text-success">

<?= $client['solde']; ?> Ar

</h2>


</div>


</div>



<div class="row mt-4">


<div class="col-md-3">

<a href="/client/depot"
class="btn btn-success w-100">

Dépôt

</a>

</div>



<div class="col-md-3">

<a href="/client/retrait"
class="btn btn-warning w-100">

Retrait

</a>

</div>



<div class="col-md-3">

<a href="/client/transfert"
class="btn btn-info w-100">

Transfert

</a>

</div>



<div class="col-md-3">

<a href="/client/historique"
class="btn btn-secondary w-100">

Historique

</a>

</div>



</div>



</div>



</body>

</html>
