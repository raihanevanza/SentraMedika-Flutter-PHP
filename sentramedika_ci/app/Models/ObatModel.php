<?php

namespace App\Models;

use CodeIgniter\Model;


class ObatModel extends Model
{
    protected $table = 'obat';
    protected $allowedFields = ['namaobat', 'kategori', 'stok', 'fotoobat'];

    public function getObat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('obat')->like('namaobat', $keyword)->orLike('kategori', $keyword);
    }
}
