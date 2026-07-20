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

        return redirect()->back()->with( 'erreur', 'Numéro de téléphone inconnu');

    }

     public function logout()
    {

        session()->destroy();

        return redirect()->to('/client/login');

    }

}