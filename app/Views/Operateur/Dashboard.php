<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Opérateur - Mobile Money</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Style partagé du dashboard (le même que la page clients) -->
<link rel="stylesheet" href="../css/styleclient.css">
</head>
<body>

<div class="mm-topbar">
  
  <div>
    <h1><i class="bi bi-speedometer2"></i> Dashboard Mobile Money</h1>
    <div class="subtitle">Vue d'ensemble des gains de l'opérateur</div>
  </div>
  <nav class="mm-nav">
    <a href="/operateur/dashboard" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="/clients"><i class="bi bi-people-fill"></i> Clients</a>
  </nav>
</div>
<nav class="mm-nav">
<a href="<?= base_url('/') ?>" class="mm-choice-btn btn-operateur">
  <i class="bi bi-speedometer2"></i></div>
  <div>Retour</div>
  <i class="bi bi-chevron-right mm-choice-arrow"></i>
</a>
  </nav>

<div class="container-fluid px-4 pb-5">

  <!-- Formulaire de filtre par période -->
  <div class="mm-card mb-4">
    <form method="GET" action="/operateur/dashboard" class="mm-filter-form">

      <div class="form-group">
        <label for="date_debut">Date début</label>
        <input type="date" id="date_debut" name="date_debut" value="<?= $_GET['date_debut'] ?? '' ?>">
      </div>

      <div class="form-group">
        <label for="date_fin">Date fin</label>
        <input type="date" id="date_fin" name="date_fin" value="<?= $_GET['date_fin'] ?? '' ?>">
      </div>

      <button type="submit" class="btn-mm">
        <i class="bi bi-funnel-fill"></i> Filtrer
      </button>

      <a href="/operateur/dashboard" class="btn-mm btn-mm-outline">
        <i class="bi bi-arrow-counterclockwise"></i> Réinitialiser
      </a>

    </form>
  </div>

  <!-- Cartes de statistiques -->
  <div class="mm-stats-row">

    <div class="mm-stat-card is-total">
      <div class="mm-stat-label"><i class="bi bi-cash-stack"></i> Gains totaux</div>
      <div class="mm-stat-value"><?= number_format($total_general, 0, ',', ' ') ?> <span class="badge-devise">Ar</span></div>
    </div>

    <div class="mm-stat-card is-retrait">
      <div class="mm-stat-label"><i class="bi bi-box-arrow-down"></i> Gains Retrait</div>
      <div class="mm-stat-value"><?= number_format($total_retrait, 0, ',', ' ') ?> <span class="badge-devise">Ar</span></div>
    </div>

    <div class="mm-stat-card is-transfert">
      <div class="mm-stat-label"><i class="bi bi-arrow-left-right"></i> Gains Transfert</div>
      <div class="mm-stat-value"><?= number_format($total_transfert, 0, ',', ' ') ?> <span class="badge-devise">Ar</span></div>
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>