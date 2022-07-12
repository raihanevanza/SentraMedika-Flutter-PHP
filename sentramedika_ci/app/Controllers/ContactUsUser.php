<?php

namespace App\Controllers;

use App\Models\ContactUsUserModel;
use Config\Validation;

class ContactUsUser extends BaseController
{
    protected $contactususerModel;
    public function __construct()
    {
        $this->contactususerModel = new ContactUsUserModel();
    }

    public function index()
    {
        // $contactus = $this->contactusModel->findAll();

        $data = [
            'title' => 'Daftar ContactUs',
            'contactus' => $this->contactususerModel->getContactUsUser()
        ];

        return view('contactususer/create', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Kontak Kami',
            'validation' => \Config\Services::validation()
        ];

        return view('contactususer/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} contactususer harus diisi.'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/contactususer/create')->withInput()->with('validation', $validation);
            return redirect()->to('/contactususer/create')->withInput();
        }


        $this->contactususerModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/contactususer');
    }
}
