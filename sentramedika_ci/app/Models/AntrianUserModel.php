<?php

namespace App\Models;

use CodeIgniter\Model;


class AntrianUserModel extends Model
{
    protected $table = 'antrian';
    protected $allowedFields = ['no_antrian', 'nama', 'no_hp', 'spesialis', 'hari'];

    public function getAntrianUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('antrian')->like('nama', $keyword)->orLike('no_antrian', $keyword);
    }
}
