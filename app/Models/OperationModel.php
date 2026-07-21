<?php

namespace App\Models;

use CodeIgniter\Model;


class OperationModel extends Model
{

    protected $table='operation';


    protected $primaryKey='id_operation';


    protected $allowedFields=[

        'id_type',
        'id_client_source',
        'id_client_destination',
        'montant',
        'frais'

    ];



    public function historiqueClient($id)
    {

        return $this
        ->select(
        'operation.*, type_operation.nom as type'
        )
        ->join(
        'type_operation',
        'type_operation.id_type = operation.id_type'
        )
        ->groupStart()
        ->where(
        'id_client_source',
        $id
        )
        ->orWhere(
        'id_client_destination',
        $id
        )
        ->groupEnd()
        ->orderBy(
        'date_operation',
        'DESC'
        )
        ->findAll();

    }


}