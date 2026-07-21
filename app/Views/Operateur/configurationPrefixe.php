<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Configuration des préfixes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/styleclient.css') ?>">

</head>

<body>
    <div class="mm-topbar">

    <div>
        <h2>Administration Opérateur</h2>
        <div class="subtitle">
            Gestion Mobile Money
        </div>
    </div>


   <?= view('Operateur/layout/navbar') ?>

</div>

<div class="container mt-4">

    <div class="mm-topbar">

        <div>

            <h2>Configuration des préfixes</h2>

            <div class="subtitle">
                Gestion des préfixes des opérateurs
            </div>

        </div>

    </div>

    <?php if(session()->getFlashdata('success')): ?>

        <div class="alert alert-success">

            <?= session()->getFlashdata('success') ?>

        </div>

    <?php endif; ?>


    <!-- AJOUT -->

    <div class="mm-card mb-4">

        <h4 class="mb-4">

            Ajouter un préfixe

        </h4>

        <form action="<?= base_url('operateur/configuration-prefixe/ajouter') ?>" method="post">

            <div class="row">

                <div class="col-md-4">

                    <input
                        type="text"
                        name="prefixe"
                        class="form-control"
                        placeholder="034"
                        required>

                </div>

                <div class="col-md-4">

                    <select
                        name="id_operateur"
                        class="form-select"
                        required>

                        <?php foreach($operateurs as $op): ?>

                            <option value="<?= $op['id_operateur'] ?>">

                                <?= $op['nom_operateur'] ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="col-md-4">

                    <button class="btn-mm">

                        Ajouter

                    </button>

                </div>

            </div>

        </form>

    </div>


    <!-- TABLEAU -->

    <div class="mm-card">

        <table class="table mm-table">

            <thead>

                <tr>

                    <th>Préfixe</th>

                    <th>Opérateur</th>

                    <th width="260">

                        Actions

                    </th>

                </tr>

            </thead>

            <tbody>

            <?php foreach($prefixes as $p): ?>

                <tr>

                    <form
                    action="<?= base_url('operateur/configuration-prefixe/modifier/'.$p['id_prefixe']) ?>"
                    method="post">

                        <td>

                            <input
                            type="text"
                            class="form-control"
                            name="prefixe"
                            value="<?= $p['prefixe'] ?>">

                        </td>

                        <td>

                            <select
                            name="id_operateur"
                            class="form-select">

                                <?php foreach($operateurs as $op): ?>

                                    <option
                                    value="<?= $op['id_operateur'] ?>"

                                    <?= ($op['id_operateur']==$p['id_operateur'])?'selected':'' ?>

                                    >

                                    <?= $op['nom_operateur'] ?>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </td>

                        <td>
                   <div class="action-buttons">

                    <button class="btn-mm">
                        Modifier
                    </button>

                    <a href="<?= base_url('operateur/configuration-prefixe/supprimer/'.$p['id_prefixe']) ?>"
                    class="btn btn-danger"
                    onclick="return confirm('Supprimer ce préfixe ?')">
                        Supprimer
                    </a>

                </div>
                        </td>

                    </form>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

</body>

</html>