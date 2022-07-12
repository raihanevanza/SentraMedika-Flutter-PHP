<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use Config\Validation;

class Antrian extends BaseController
{
    protected $antrianModel;
    public function __construct()
    {
        $this->antrianModel = new AntrianModel();
    }

    public function index()
    {
        // $contactus = $this->contactusModel->findAll();

        $data = [
            'title' => 'Daftar Antrian',
            'antrian' => $this->antrianModel->getAntrian()
        ];

        return view('antrian/tblantrian', $data);
    }

    public function delete($id)
    {
        $this->antrianModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/antrian');
    }
}
