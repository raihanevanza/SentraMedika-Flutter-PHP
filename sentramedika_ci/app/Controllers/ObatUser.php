<?php

namespace App\Controllers;

use App\Models\ObatUserModel;
use Config\Validation;

class ObatUser extends BaseController
{
    protected $obatuserModel;
    public function __construct()
    {
        $this->obatuserModel = new ObatUserModel();
    }

    public function index()
    {
        // $obat = $this->obatModel->findAll();

        $data = [
            'title' => 'Daftar Obat',
            'obat' => $this->obatuserModel->getObatUser()
        ];

        return view('user/obat', $data);
    }
}
