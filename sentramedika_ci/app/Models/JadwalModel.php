<?php

namespace App\Models;

use CodeIgniter\Model;


class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $allowedFields = ['namadokter', 'spesialis', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'fotodokter'];

    public function getJadwal($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('jadwal')->like('namadokter', $keyword)->orLike('spesialis', $keyword);
    }
}
