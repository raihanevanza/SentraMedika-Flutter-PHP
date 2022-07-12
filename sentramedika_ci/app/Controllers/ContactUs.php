<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use Config\Validation;

class ContactUs extends BaseController
{
    protected $contactusModel;
    public function __construct()
    {
        $this->contactusModel = new ContactUsModel();
    }

    public function index()
    {
        // $contactus = $this->contactusModel->findAll();
        $currentPage = $this->request->getVar('page_contactus') ? $this->request->getVar('page_contactus') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $contactus = $this->contactusModel->search($keyword);
        } else {
            $contactus = $this->contactusModel;
        }

        $data = [
            'title' => 'Daftar ContactUs',
            'contactus' => $contactus->paginate(2, 'contactus'),
            'pager' => $this->contactusModel->pager,
            'currentPage' => $currentPage
        ];

        return view('contactus/tblcontactus', $data);
    }

    public function delete($id)
    {
        $this->contactusModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/contactus');
    }
}
