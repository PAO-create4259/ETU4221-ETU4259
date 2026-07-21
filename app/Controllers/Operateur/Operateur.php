<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\GainModel;


class Operateur extends BaseController
{

    public function dashboard()
    {

        $gainModel = new GainModel();

        $dateDebut = $this->request->getGet('date_debut');
        $dateFin = $this->request->getGet('date_fin');

        $data = [

            'gain_interne' =>
                $gainModel->getGainInterne(),

            'gain_inter_operateur' =>
                $gainModel->getGainInterOperateur(),

            'total_general' =>
                $gainModel->getTotalGain()

        ];
        return view( 'Operateur/Dashboard', $data);

    }

}