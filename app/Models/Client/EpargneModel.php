<?php

namespace App\Models\Client;

use CodeIgniter\Model;

class EpargneModel extends Model
{
    protected $table = 'epargne';

    protected $primaryKey = 'id_epargne';

    protected $allowedFields = ['id_client','pourcentage'];

    
}