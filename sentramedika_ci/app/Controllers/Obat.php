<?php

namespace App\Controllers;

use App\Models\ObatModel;
use Config\Validation;

class Obat extends BaseController
{
    protected $obatModel;
    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }

    public function index()
    {
        // $obat = $this->obatModel->findAll();
        $currentPage = $this->request->getVar('page_obat') ? $this->request->getVar('page_obat') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $obat = $this->obatModel->search($keyword);
        } else {
            $obat = $this->obatModel;
        }

        $data = [
            'title' => 'Daftar Obat',
            'obat' => $obat->paginate(2, 'obat'),
            'pager' => $this->obatModel->pager,
            'currentPage' => $currentPage
        ];

        return view('obat/tblobat', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Obat',
            'obat' => $this->obatModel->getObat($id)
        ];

        if (empty($data['obat'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Judul obat ' . $id . ' tidak ditemukan.');
        }

        return view('obat/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Obat',
            'validation' => \Config\Services::validation()
        ];

        return view('obat/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'namaobat' => [
                'rules' => 'required|is_unique[obat.namaobat]',
                'errors' => [
                    'required' => '{field} obat harus diisi.',
                    'is_unique' => '{field} obat sudah terdaftar'
                ]
            ],
            'fotoobat' => [
                'rules' => 'max_size[fotoobat,5024]|is_image[fotoobat]|mime_in[fotoobat,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/obat/create')->withInput()->with('validation', $validation);
            return redirect()->to('/obat/create')->withInput();
        }


        $fileFotoObat = $this->request->getFile('fotoobat');
        if ($fileFotoObat->getError() == 4) {
            $namaFotoObat = 'default.png';
        } else {
            $namaFotoObat = $fileFotoObat->getRandomName();
            $fileFotoObat->move('img', $namaFotoObat);
        }

        $this->obatModel->save([
            'namaobat' => $this->request->getVar('namaobat'),
            'kategori' => $this->request->getVar('kategori'),
            'stok' => $this->request->getVar('stok'),
            'fotoobat' => $namaFotoObat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/obat');
    }

    public function delete($id)
    {
        $this->obatModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/obat');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'Form edit Data Obat',
            'validation' => \Config\Services::validation(),
            'obat' => $this->obatModel->getObat($id)
        ];

        return view('obat/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate([
            'fotoobat' => [
                'rules' => 'max_size[fotoobat,5024]|is_image[fotoobat]|mime_in[fotoobat,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/jadwal/edit')->withInput();
        }

        $fileFotoObat = $this->request->getFile('fotoobat');

        if ($fileFotoObat->getError() == 4) {
            $namaFotoObat = $this->request->getVar('fotoobatLama');
        } else {
            $namaFotoObat = $fileFotoObat->getRandomName();
            $fileFotoObat->move('img', $namaFotoObat);
        }

        $this->obatModel->save([
            'id' => $id,
            'namaobat' => $this->request->getVar('namaobat'),
            'kategori' => $this->request->getVar('kategori'),
            'stok' => $this->request->getVar('stok'),
            'fotoobat' => $namaFotoObat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/obat');
    }
}
