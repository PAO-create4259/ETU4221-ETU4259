<?php

namespace App\Controllers\Client;


use App\Controllers\BaseController;
use App\Models\Client\ClientModel;
use App\Models\Client\EpargneModel;

class EpargneController extends BaseController
{
    private function idClient()
{

    return session()->get('id_client');

}
public function inserer()
{

     $id=$this->idClient();

    $epargne= $this->request->getPost('epargne');
    $clientModel= new ClientModel();
    $EpargneModel= new EpargneModel();
        
    $epargne->insert([ 'id_client'=>$id, 'pourcentage'=>$epargne, ]);
    return redirect()->to('/client/dashboard');


}
}