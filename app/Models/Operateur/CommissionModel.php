<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class CommissionModel extends Model
{
    protected $table = 'commission_inter_operateur';

    protected $primaryKey = 'id_commission';

    protected $allowedFields = ['id_operateur_source','id_operateur_destination','pourcentage'];

    public function getAll()
    {
        return $this
            ->select('commission_inter_operateur.*, os.nom_operateur AS source, od.nom_operateur AS destination')
            ->join('operateur os', 'os.id_operateur=id_operateur_source')
            ->join('operateur od', 'od.id_operateur=id_operateur_destination')
            ->findAll();
    }
}