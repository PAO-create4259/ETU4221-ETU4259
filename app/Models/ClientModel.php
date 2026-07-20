<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'client';

    protected $primaryKey = 'id_client';

    protected $allowedFields = [
        'numero',
        'nom',
        'solde',
        'id_operateur'
    ];

    public function getClientByNumero($numero)
    {
        return $this
            ->where('numero',$numero)
            ->first();
    }
}