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

}