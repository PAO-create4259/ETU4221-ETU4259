<?php

namespace App\Models\Operateur;

use CodeIgniter\Model;

class OperateurModel extends Model
{
    protected $table='operateur';
    protected $primaryKey='id_operateur';
    protected $allowedFields=['nom_operateur'];
}