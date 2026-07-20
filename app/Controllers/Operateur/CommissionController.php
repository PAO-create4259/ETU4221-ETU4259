<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\CommissionModel;
use App\Models\Operateur\OperateurModel;

class CommissionController extends BaseController
{
    public function index()
    {
        $commissionModel = new CommissionModel();
        $operateurModel  = new OperateurModel();

        $data = ['commissions' => $commissionModel->getAll(),'operateurs'  => $operateurModel->findAll()];

        return view('Operateur/configurationCommission', $data);
    }

    public function update($id)
    {
        $commissionModel = new CommissionModel();
        $commissionModel->update($id, ['pourcentage' => $this->request->getPost('pourcentage')]);

        return redirect()->back()->with('success', 'Commission mise à jour.');
    }
}