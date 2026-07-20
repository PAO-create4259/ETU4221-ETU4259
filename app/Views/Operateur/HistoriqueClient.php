<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Détail du client - Mobile Money</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Style partagé du dashboard -->
<link rel="stylesheet" href="../css/styleclient.css">
</head>
<body>

<div class="mm-topbar">
  <div>
    <h2><i class="bi bi-person-vcard"></i> Détail du client</h2>
    <div class="subtitle">Informations complètes du compte</div>
  </div>
  <nav class="mm-nav">
    <a href="/operateur/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="/clients" class="active"><i class="bi bi-people-fill"></i> Clients</a>
  </nav>
</div>

<div class="container-fluid px-4 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-7">

      <div class="mm-card">

        <div class="mm-profile-header">
          <div class="mm-avatar-lg">
            <?= strtoupper(substr($client['nom'], 0, 1)); ?>
          </div>
          <div>
            <h4><?= $client['nom']; ?></h4>
            <span class="mm-numero"><i class="bi bi-telephone-fill me-1"></i><?= $client['numero']; ?></span>
          </div>
        </div>

        <div class="mm-info-list">

          <div class="mm-info-row">
            <div class="mm-info-icon"><i class="bi bi-wallet2"></i></div>
            <div>
              <div class="mm-info-label">Solde</div>
              <div class="mm-info-value mm-solde-highlight">
                <?= number_format($client['solde'], 0, ',', ' '); ?> <span class="badge-devise">Ar</span>
              </div>
            </div>
          </div>

          <div class="mm-info-row">
            <div class="mm-info-icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <div class="mm-info-label">Numéro</div>
              <div class="mm-info-value"><?= $client['numero']; ?></div>
            </div>
          </div>

          <div class="mm-info-row">
            <div class="mm-info-icon"><i class="bi bi-calendar3"></i></div>
            <div>
              <div class="mm-info-label">Date création</div>
              <div class="mm-info-value"><?= $client['date_creation']; ?></div>
            </div>
          </div>

        </div>

        <div class="mt-4 d-flex gap-2">
          <a href="/clients" class="btn-mm btn-mm-outline">
            <i class="bi bi-arrow-left"></i> Retour
          </a>
        </div>

      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>