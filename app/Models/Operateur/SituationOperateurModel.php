<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class SituationOperateurModel extends Model
{

    protected $table = 'situation_operateur';

    protected $primaryKey = 'id_situation';

    protected $allowedFields = [
        'id_operateur_source',
        'id_operateur_destination',
        'montant'
    ];


    public function getSituation()
    {
        return $this
            ->select('
                situation_operateur.*,
                source.nom_operateur AS source,
                destination.nom_operateur AS destination
            ')
            ->join(
                'operateur source',
                'source.id_operateur = situation_operateur.id_operateur_source'
            )
            ->join(
                'operateur destination',
                'destination.id_operateur = situation_operateur.id_operateur_destination'
            )
            ->findAll();
    }

}