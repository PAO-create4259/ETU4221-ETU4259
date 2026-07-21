<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class PrefixeModel extends Model
{

    protected $table='prefixe';

    protected $primaryKey='id_prefixe';

    protected $allowedFields=['id_operateur','prefixe'];

    public function getAll()
    {
        return $this
        ->select('prefixe.*,operateur.nom_operateur')
        ->join('operateur','operateur.id_operateur=prefixe.id_operateur')
        ->findAll();
    }

    public function ajouter($data)
    {
        return $this->insert($data);
    }

    public function modifier($id, $data)
    {
        return $this->update($id, $data);
    }

    public function supprimer($id)
    {
        return $this->delete($id);
    }

    public function getById($id)
    {
        return $this->find($id);
    }

}