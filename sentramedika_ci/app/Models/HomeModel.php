<?php

namespace App\Models;

use CodeIgniter\Model;


class HomeModel extends Model
{
    protected $table = 'jadwal';
    protected $allowedFields = ['namadokter', 'spesialis', 'haripraktek', 'fotodokter'];

    public function getHome($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
