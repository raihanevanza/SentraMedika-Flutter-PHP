<?php

namespace App\Controllers;

use App\Models\AntrianUserModel;
use Config\Validation;

class AntrianUser extends BaseController
{
    protected $antrianuserModel;
    public function __construct()
    {
        $this->antrianuserModel = new AntrianUserModel();
    }

    public function index()
    {
        // $contactus = $this->contactusModel->findAll();

        $data = [
            'title' => 'Daftar Antrian',
            'antrian' => $this->antrianuserModel->getAntrianUser()
        ];

        return view('antrianuser/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Antrian',
            'validation' => \Config\Services::validation()
        ];

        return view('antrianuser/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} antrianuser harus diisi.'
                ]
            ],
            'hari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} antrianuser harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/antrianuser/create')->withInput()->with('validation', $validation);
            return redirect()->to('/antrianuser/create')->withInput();
        }

        $this->antrianuserModel->save([
            'no_antrian' => $this->request->getVar('no_antrian'),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'spesialis' => $this->request->getVar('spesialis'),
            'hari' => $this->request->getVar('hari')
        ]);

        session()->setFlashdata('pesan', 'Data antrian berhasil ditambahkan.');

        return redirect()->to('/antrianuser');
    }
}
