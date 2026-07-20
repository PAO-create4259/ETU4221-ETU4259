<h2>Détail du client</h2>


<div class="card">

<div class="card-body">

<h4>
Nom :
<?= $client['nom']; ?>
</h4>


<p>
Numéro :
<?= $client['numero']; ?>
</p>


<p>
Solde :
<?= $client['solde']; ?> Ar
</p>


<p>
Date création :
<?= $client['date_creation']; ?>
</p>


<a href="/clients" class="btn btn-secondary">
Retour
</a>


</div>

</div>