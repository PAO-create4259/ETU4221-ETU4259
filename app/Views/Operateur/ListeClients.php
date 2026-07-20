<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des clients - Mobile Money</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styleclient.css">

</head>
<body>

<div class="mm-topbar">
  <h2><i class="bi bi-wallet2"></i> Liste des clients</h2>
  <div class="subtitle">Tableau de bord Mobile Money — gestion des comptes clients</div>
   <nav class="mm-nav">
    <a href="/operateur/dashboard" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="/clients"><i class="bi bi-people-fill"></i> Clients</a>
  </nav>
</div>


<div class="container-fluid px-4 pb-5">
  <div class="mm-card">

    <div class="mm-card-header">
      <div>
        <span class="badge rounded-pill" style="background:#fdece0;color:var(--mm-primary-dark);">
          <i class="bi bi-people-fill"></i> <?= isset($clients) ? count($clients) : 0; ?> client(s)
        </span>
      </div>
      <div class="mm-search">
        <i class="bi bi-search"></i>
        <input type="text" id="mmSearchInput" class="form-control" placeholder="Rechercher un client...">
      </div>
    </div>

    <div class="table-responsive">
      <table class="table mm-table align-middle">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Numéro</th>
            <th>Solde</th>
            <th class="text-end">Action</th>
          </tr>
        </thead>
        <tbody id="mmTableBody">

        <?php foreach($clients as $client): ?>
          <tr>
            <td>
              <div class="mm-client">
                <div class="mm-avatar">
                  <?= strtoupper(substr($client['nom'], 0, 1)); ?>
                </div>
                <span class="mm-client-name"><?= $client['nom']; ?></span>
              </div>
            </td>

            <td>
              <span class="mm-numero"><i class="bi bi-telephone-fill me-1"></i><?= $client['numero']; ?></span>
            </td>

            <td>
              <span class="mm-solde"><?= number_format($client['solde'], 0, ',', ' '); ?> <span class="badge-devise">Ar</span></span>
            </td>

            <td class="text-end">
              <a href="/client/<?= $client['id_client']; ?>" class="btn btn-mm">
                <i class="bi bi-eye-fill"></i>Voir
              </a>
            </td>
          </tr>
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>

    <?php if(empty($clients)): ?>
      <div class="text-center text-muted py-5">
        <i class="bi bi-inbox" style="font-size:2rem;"></i>
        <p class="mt-2 mb-0">Aucun client trouvé.</p>
      </div>
    <?php endif; ?>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Recherche instantanée côté client
  document.getElementById('mmSearchInput').addEventListener('input', function(e){
    const term = e.target.value.toLowerCase();
    document.querySelectorAll('#mmTableBody tr').forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(term) ? '' : 'none';
    });
  });
</script>

</body>
</html>