<?php

namespace App\Models;

use CodeIgniter\Model;


class JadwalUserModel extends Model
{
    protected $table = 'jadwal';
    protected $allowedFields = ['namadokter', 'spesialis', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'fotodokter'];

    public function getJadwalUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
