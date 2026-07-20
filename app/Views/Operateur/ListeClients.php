<h2>Liste des clients</h2>


<table class="table table-bordered">

<tr>
<th>Nom</th>
<th>Numéro</th>
<th>Solde</th>
<th>Action</th>
</tr>


<?php foreach($clients as $client): ?>

<tr>

<td>
<?= $client['nom']; ?>
</td>


<td>
<?= $client['numero']; ?>
</td>


<td>
<?= $client['solde']; ?> Ar
</td>


<td>

<a href="/client/<?= $client['id_client']; ?>"
class="btn btn-primary">

Voir

</a>

</td>

</tr>


<?php endforeach; ?>


</table>