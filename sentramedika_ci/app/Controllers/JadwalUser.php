<?php

namespace App\Controllers;

use App\Models\JadwalUserModel;
use Config\Validation;

class JadwalUser extends BaseController
{
    protected $jadwaluserModel;
    public function __construct()
    {
        $this->jadwaluserModel = new JadwalUserModel();
    }

    public function index()
    {
        // $jadwal = $this->jadwalModel->findAll();

        $data = [
            'title' => 'Daftar Jadwal',
            'jadwal' => $this->jadwaluserModel->getJadwalUser()
        ];

        return view('user/jadwal', $data);
    }
}
