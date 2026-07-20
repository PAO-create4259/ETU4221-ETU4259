<!DOCTYPE html>
<html>

<head>

<title>
Connexion Mobile Money
</title>

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>
<body>


    <div class="container mt-5">


    <h2 class="text-center"> Connexion Client </h2>



    <?php if(session()->getFlashdata('erreur')): ?>

    <div class="alert alert-danger">

    <?= session()->getFlashdata('erreur'); ?>

    </div>

    <?php endif; ?>



    <form method="post" action="/client/authentification">


    <div class="mb-3">

    <label>
    Numéro téléphone
    </label>


    <input 
    type="text"
    name="numero"
    class="form-control"
    placeholder="0341234567"
    required>

    </div>



    <button 
    class="btn btn-primary">

    Se connecter

    </button>


    </form>


    </div>


</body>

</html>
