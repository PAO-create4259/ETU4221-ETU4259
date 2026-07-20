<?php

namespace App\Controllers\Client;


use App\Controllers\BaseController;
use App\Models\Client\ClientModel;

class AuthController extends BaseController
{
    // login
    public function index()
    {
        return view('Client/login');
    }

    public function login()
    {

        $numero = $this->request->getPost('numero');


        $model = new ClientModel();


        $client = $model->getClientByNumero($numero);

        if($client)
        {

            session()->set([
                'id_client'=>$client['id_client'],
                'nom'=>$client['nom'],
                'numero'=>$client['numero'],
                'connecte'=>true
            ]);


             return view('Client/dashboard',['client'=>$client]);

        }
        // création automatique


    $nouveauClient = [

        'numero'=>$numero,

        'nom'=>'Nouveau client',

        'solde'=>0

    ];



    $model->insert($nouveauClient);



    // Récupérer le client créé

    $id = $model->getInsertID();



    $client = $model->find($id);



    // Création de session

    session()->set([

        'id_client'=>$client['id_client'],

        'nom'=>$client['nom'],

        'numero'=>$client['numero'],

        'connecte'=>true

    ]);



    return redirect()
    ->to('/client/dashboard');
 }

     public function logout()
    {

        session()->destroy();

        return redirect()->to('/client/login');

    }

}