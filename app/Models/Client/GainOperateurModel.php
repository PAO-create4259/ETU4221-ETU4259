<?php

namespace App\Models\Client;

use CodeIgniter\Model;


class GainOperateurModel extends Model
{

    protected $table='gain_operateur';

    protected $primaryKey='id_gain';

    protected $allowedFields=['id_operation','montant_frais'];

}