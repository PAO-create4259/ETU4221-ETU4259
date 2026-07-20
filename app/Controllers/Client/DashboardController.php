<?php

namespace App\Controllers\Client;


use App\Controllers\BaseController;
use App\Models\Client\ClientModel;

class DashboardController extends BaseController
{


    public function index()
    {

        $id =session()->get('id_client');
        $model =new ClientModel();
        $data['client'] =$model->find($id);
        return view('Client/dashboard',$data);

    }

}