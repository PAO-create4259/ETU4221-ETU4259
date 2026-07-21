<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class GainModel extends Model
{

    protected $table = 'gain_operateur';


    public function getGainInterne()
    {
        return $this
            ->selectSum('gain_operateur.montant_frais','total')
            ->join(
                'operation',
                'operation.id_operation = gain_operateur.id_operation'
            )
            ->where('operation.inter_operateur',0)
            ->get()
            ->getRow()
            ->total ?? 0;
    }



    public function getGainInterOperateur()
    {
        return $this
            ->selectSum('operation.commission_inter','total')
            ->join(
                'operation',
                'operation.id_operation = gain_operateur.id_operation'
            )
            ->where('operation.inter_operateur',1)
            ->get()
            ->getRow()
            ->total ?? 0;
    }



    public function getTotalGain()
    {
        return 
            $this->getGainInterne()
            +
            $this->getGainInterOperateur();
    }

}