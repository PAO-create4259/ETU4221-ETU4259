<?php

namespace App\Controllers;

use App\Models\ClientModel;

class ClientController extends BaseController
{

    public function index()
    {
        $model = new ClientModel();

        $data['clients'] = $model->findAll();

        return view('Operateur/ListeClients',$data);
    }


    public function detail($id)
    {
        $model = new ClientModel();

        $data['client'] = $model->find($id);

        return view('Operateur/HistoriqueClient',$data);
    }

}