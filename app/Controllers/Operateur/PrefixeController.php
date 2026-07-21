<?php

namespace App\Controllers\Operateur;

use App\Controllers\BaseController;
use App\Models\Operateur\PrefixeModel;
use App\Models\Operateur\OperateurModel;

class PrefixeController extends BaseController
{
    // Afficher la liste
    public function index()
    {
        $prefixeModel = new PrefixeModel();
        $operateurModel = new OperateurModel();

        $data['prefixes'] = $prefixeModel->getPrefixes();
        $data['operateurs'] = $operateurModel->findAll();

        return view('Operateur/configurationPrefixe', $data);
    }

    // Ajouter un préfixe
    public function ajouter()
    {
        $prefixeModel = new PrefixeModel();

        $prefixeModel->insert([
            'prefixe'      => $this->request->getPost('prefixe'),
            'id_operateur' => $this->request->getPost('id_operateur')
        ]);

        return redirect()->to('/operateur/configuration-prefixe');
    }

    // Modifier un préfixe
    public function modifier($id)
    {
        $prefixeModel = new PrefixeModel();

        $prefixeModel->update($id, [
            'prefixe'      => $this->request->getPost('prefixe'),
            'id_operateur' => $this->request->getPost('id_operateur')
        ]);

        return redirect()->to('/operateur/configuration-prefixe');
    }

    // Supprimer un préfixe
    public function supprimer($id)
    {
        $prefixeModel = new PrefixeModel();

        $prefixeModel->delete($id);

        return redirect()->to('/operateur/configuration-prefixe');
    }
}