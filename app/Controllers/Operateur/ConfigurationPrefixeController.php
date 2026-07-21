<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\PrefixeModel;
use App\Models\Operateur\OperateurModel;

class ConfigurationPrefixeController extends BaseController
{

    public function index()
    {
        $prefixeModel = new PrefixeModel();
        $operateurModel = new OperateurModel();

        $data = [
            'prefixes' => $prefixeModel->getAll(),
            'operateurs' => $operateurModel->findAll()
        ];

        return view('Operateur/configurationPrefixe',$data);
    }


    public function ajouter()
    {
        $model = new PrefixeModel();


        $data = [
            'prefixe'=>$this->request->getPost('prefixe'),
            'id_operateur'=>$this->request->getPost('id_operateur')
        ];


        $model->ajouter($data);


        return redirect()->to('/operateur/configuration-prefixe')
        ->with('success','Préfixe ajouté');
    }



    public function modifier($id)
    {

        $model = new PrefixeModel();


        $data=[
            'prefixe'=>$this->request->getPost('prefixe'),
            'id_operateur'=>$this->request->getPost('id_operateur')
        ];


        $model->modifier($id,$data);


        return redirect()->to('/operateur/configuration-prefixe')
        ->with('success','Préfixe modifié');

    }



    public function supprimer($id)
    {

        $model = new PrefixeModel();


        $model->supprimer($id);


        return redirect()->to('/operateur/configuration-prefixe')
        ->with('success','Préfixe supprimé');

    }

}