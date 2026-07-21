<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\SituationOperateurModel;


class SituationOperateurController extends BaseController
{

    public function index()
    {

        $model = new SituationOperateurModel();


        $data = [
            'situations' => $model->getSituation()
        ];


        return view(
            'Operateur/situationOperateur',
            $data
        );

    }

}