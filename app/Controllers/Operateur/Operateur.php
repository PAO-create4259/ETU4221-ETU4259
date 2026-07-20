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

            'total_general' => $gainModel->getTotalGain($dateDebut,$dateFin),

            'total_retrait' => $gainModel->getGainParType('Retrait', $dateDebut, $dateFin),

            'total_transfert' => $gainModel->getGainParType( 'Transfert', $dateDebut, $dateFin),
        ];
        return view( 'Operateur/Dashboard', $data);

    }

}