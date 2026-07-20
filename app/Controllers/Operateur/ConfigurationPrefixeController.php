<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\PrefixeModel;

class ConfigurationPrefixeController extends BaseController
{

    public function index()
    {
        $model=new PrefixeModel();
        $data['prefixes']=$model->getAll();
        return view('Operateur/configurationPrefixe', $data);
        
    }

}