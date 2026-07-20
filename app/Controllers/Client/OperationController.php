<?php

namespace App\Controllers\Client;


use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\OperationModel;
use App\Models\BaremeFraisModel;
use App\Models\GainOperateurModel;



class OperationController extends BaseController
{


private function idClient()
{

return session()
->get('id_client');

}



// =================
// DEPOT
// =================


public function depot()
{

return view(
'client/depot'
);

}



public function effectuerDepot()
{

$id=$this->idClient();


$montant=
$this->request
->getPost('montant');


$clientModel=
new ClientModel();


$operation=
new OperationModel();



$client=
$clientModel->find($id);



$clientModel->update(

$id,

[
'solde'=>
$client['solde']+$montant
]

);



$operation->insert([

'id_type'=>1,

'id_client_source'=>$id,

'montant'=>$montant,

'frais'=>0

]);



return redirect()
    ->to('/client/dashboard');

}



// =================
// RETRAIT
// =================


public function retrait()
{

return view(
'client/retrait'
);

}



public function effectuerRetrait()
{


$id=$this->idClient();


$montant=
$this->request
->getPost('montant');



$clientModel=
new ClientModel();


$operation=
new OperationModel();


$bareme=
new BaremeFraisModel();


$gain=
new GainOperateurModel();



$client=
$clientModel->find($id);



$f =
$bareme->getFrais(
2,
$montant
);



$frais =
$f ? $f['frais'] : 0;



if($client['solde'] < $montant+$frais)
{

return redirect()
->back()
->with(
'erreur',
'Solde insuffisant'
);

}



$clientModel->update(

$id,

[
'solde'=>
$client['solde']
-$montant
-$frais
]

);



$operation->insert([

'id_type'=>2,

'id_client_source'=>$id,

'montant'=>$montant,

'frais'=>$frais

]);



$idOperation =
$operation->getInsertID();



$gain->insert([

'id_operation'=>$idOperation,

'montant_frais'=>$frais

]);



return redirect()
->to('/client/dashboard');


}



// =================
// TRANSFERT
// =================


public function transfert()
{

return view(
'client/transfert'
);

}


public function effectuerTransfert()
{

    // Client connecté (expéditeur)
    $idSource = $this->idClient();



    // Récupération des données du formulaire

    $numeroDestination =
    $this->request->getPost('numero');


    $montant =
    $this->request->getPost('montant');



    // Chargement des modèles

    $clientModel = new ClientModel();

    $operationModel = new OperationModel();

    $baremeModel = new BaremeFraisModel();

    $gainModel = new GainOperateurModel();



    // Recherche expéditeur

    $source =
    $clientModel->find($idSource);



    // Recherche destinataire

    $destination =
    $clientModel
    ->where('numero',$numeroDestination)
    ->first();



    if(!$destination)
    {

        return redirect()
        ->back()
        ->with(
            'erreur',
            'Numéro destinataire inexistant'
        );

    }



    // Empêcher transfert vers soi-même

    if($destination['id_client'] == $idSource)
    {

        return redirect()
        ->back()
        ->with(
            'erreur',
            'Impossible de transférer vers votre propre compte'
        );

    }



    // Récupération des frais transfert
    // id_type = 3 dans ta base

    $bareme =
    $baremeModel->getFrais(
        3,
        $montant
    );


    $frais = 0;


    if($bareme)
    {
        $frais = $bareme['frais'];
    }



    // Vérification solde

    if($source['solde'] < ($montant + $frais))
    {

        return redirect()
        ->back()
        ->with(
            'erreur',
            'Solde insuffisant'
        );

    }



    // Nouveau solde expéditeur

    $nouveauSoldeSource =
    $source['solde']
    -
    $montant
    -
    $frais;



    $clientModel->update(

        $idSource,

        [
            'solde'=>$nouveauSoldeSource
        ]

    );



    // Crédit destinataire

    $nouveauSoldeDestination =
    $destination['solde']
    +
    $montant;



    $clientModel->update(

        $destination['id_client'],

        [
            'solde'=>$nouveauSoldeDestination
        ]

    );



    // Enregistrement opération

    $operationModel->insert([

        'id_type'=>3,

        'id_client_source'=>$idSource,

        'id_client_destination'=>$destination['id_client'],

        'montant'=>$montant,

        'frais'=>$frais

    ]);



    // Récupération ID opération

    $idOperation =
    $operationModel->getInsertID();



    // Enregistrement gain opérateur

    if($frais > 0)
    {

        $gainModel->insert([

            'id_operation'=>$idOperation,

            'montant_frais'=>$frais

        ]);

    }



    // Message succès

    session()->setFlashdata(

        'success',

        'Transfert effectué avec succès'

    );



    return redirect()
    ->to('/client/dashboard');


}



// =================
// HISTORIQUE
// =================


public function historique()
{

$id=$this->idClient();


$model=
new OperationModel();



$data['operations']
=
$model->historiqueClient($id);



return view(
'client/historique',
$data
);


}



}