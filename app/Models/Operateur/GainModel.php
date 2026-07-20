<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class GainModel extends Model
{

    protected $table = "gain_operateur";

    public function getTotalGain($dateDebut=null,$dateFin=null)
    {

        $builder = $this->db->table('gain_operateur');

        $builder->selectSum('montant_frais','total');

        if($dateDebut && $dateFin)
        {
            $builder->where("date_gain BETWEEN '$dateDebut' AND '$dateFin'");
        }
        $result = $builder->get()->getRow();

        return $result ? $result->total : 0;

    }

    public function getGainParType(
        $type,
        $dateDebut=null,
        $dateFin=null
    )
    {

        $builder = $this->db->table('gain_operateur');

        $builder
        ->selectSum('gain_operateur.montant_frais','total');

        $builder->join('operation','operation.id_operation = gain_operateur.id_operation');

        $builder->join('type_operation','type_operation.id_type = operation.id_type');

        $builder->where('type_operation.nom',$type);

        if($dateDebut && $dateFin)
        {
            $builder->where("gain_operateur.date_gain BETWEEN '$dateDebut' AND '$dateFin'");
        }

        return $builder
            ->get()
            ->getRow()
            ->total ?? 0;

    }
}