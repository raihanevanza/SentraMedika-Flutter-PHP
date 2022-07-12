<?php

namespace App\Models;

use CodeIgniter\Model;


class ObatUserModel extends Model
{
    protected $table = 'obat';
    protected $allowedFields = ['namaobat', 'kategori', 'stok', 'fotoobat'];

    public function getObatUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
