<?php

namespace App\Models;

use CodeIgniter\Model;


class BaremeFraisModel extends Model
{

    protected $table='bareme_frais';

    protected $primaryKey='id_bareme';


    protected $allowedFields=[

        'id_type',
        'montant_min',
        'montant_max',
        'frais'

    ];



    public function getFrais($type,$montant)
    {

        return $this
        ->where('id_type',$type)
        ->where(
        'montant_min <=',
        $montant
        )
        ->where(
        'montant_max >=',
        $montant
        )
        ->first();

    }

}