<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use Config\Validation;

class Jadwal extends BaseController
{
    protected $jadwalModel;
    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {
        // $jadwal = $this->jadwalModel->findAll();
        $currentPage = $this->request->getVar('page_jadwal') ? $this->request->getVar('page_jadwal') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $jadwal = $this->jadwalModel->search($keyword);
        } else {
            $jadwal = $this->jadwalModel;
        }

        $data = [
            'title' => 'Daftar Jadwal',
            'jadwal' => $jadwal->paginate(2, 'jadwal'),
            'pager' => $this->jadwalModel->pager,
            'currentPage' => $currentPage
        ];

        return view('jadwal/tbljadwal', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Jadwal',
            'jadwal' => $this->jadwalModel->getJadwal($id)
        ];

        if (empty($data['jadwal'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Judul jadwal ' . $id . ' tidak ditemukan.');
        }

        return view('jadwal/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Jadwal',
            'validation' => \Config\Services::validation()
        ];

        return view('jadwal/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'namadokter' => [
                'rules' => 'required|is_unique[jadwal.namadokter]',
                'errors' => [
                    'required' => '{field} jadwal harus diisi.',
                    'is_unique' => '{field} jadwal sudah terdaftar'
                ]
            ],
            'fotodokter' => [
                'rules' => 'max_size[fotodokter,5024]|is_image[fotodokter]|mime_in[fotodokter,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/jadwal/create')->withInput()->with('validation', $validation);
            return redirect()->to('/jadwal/create')->withInput();
        }

        $fileFotoDokter = $this->request->getFile('fotodokter');
        if ($fileFotoDokter->getError() == 4) {
            $namaFotoDokter = 'default.png';
        } else {
            $namaFotoDokter = $fileFotoDokter->getRandomName();
            $fileFotoDokter->move('img', $namaFotoDokter);
        }


        $this->jadwalModel->save([
            'namadokter' => $this->request->getVar('namadokter'),
            'spesialis' => $this->request->getVar('spesialis'),
            'senin' => implode(" - ", $this->request->getVar('senin')),
            'selasa' => implode(" - ", $this->request->getVar('selasa')),
            'rabu' => implode(" - ", $this->request->getVar('rabu')),
            'kamis' => implode(" - ", $this->request->getVar('kamis')),
            'jumat' => implode(" - ", $this->request->getVar('jumat')),
            'sabtu' => implode(" - ", $this->request->getVar('sabtu')),
            'minggu' => implode(" - ", $this->request->getVar('minggu')),
            'fotodokter' => $namaFotoDokter
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/jadwal');
    }

    public function delete($id)
    {
        $this->jadwalModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/jadwal');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form edit Data Jadwal',
            'validation' => \Config\Services::validation(),
            'jadwal' => $this->jadwalModel->getJadwal($id)
        ];

        return view('jadwal/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'fotodokter' => [
                'rules' => 'max_size[fotodokter,5024]|is_image[fotodokter]|mime_in[fotodokter,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/jadwal/edit')->withInput();
        }

        $fileFotoDokter = $this->request->getFile('fotodokter');

        if ($fileFotoDokter->getError() == 4) {
            $namaFotoDokter = $this->request->getVar('fotodokterLama');
        } else {
            $namaFotoDokter = $fileFotoDokter->getRandomName();
            $fileFotoDokter->move('img', $namaFotoDokter);
        }

        $this->jadwalModel->save([
            'id' => $id,
            'namadokter' => $this->request->getVar('namadokter'),
            'spesialis' => $this->request->getVar('spesialis'),
            'senin' => implode(" - ", $this->request->getVar('senin')),
            'selasa' => implode(" - ", $this->request->getVar('selasa')),
            'rabu' => implode(" - ", $this->request->getVar('rabu')),
            'kamis' => implode(" - ", $this->request->getVar('kamis')),
            'jumat' => implode(" - ", $this->request->getVar('jumat')),
            'sabtu' => implode(" - ", $this->request->getVar('sabtu')),
            'minggu' => implode(" - ", $this->request->getVar('minggu')),
            'fotodokter' => $namaFotoDokter
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to('/jadwal');
    }
}
