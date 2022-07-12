<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
 
use App\Models\JadwalAPIModel;
 
class JadwalAPI extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\JadwalAPIModel';
 
    public function __construct()
    {
        $this->jadwal = new JadwalAPIModel;
    }
 
    public function index()
    {
        $data = $this->jadwal->getJadwal();
 
        foreach ($data as $row) { 
 
            $jadwal[] = [
                'id' => intval($row->id),
                'namadokter' => $row->namadokter,
                'spesialis' => $row->spesialis,
                'senin' => $row->senin,
                'selasa' => $row->selasa,
                'rabu' => $row->rabu,
                'kamis' => $row->kamis,
                'jumat' => $row->jumat,
                'sabtu' => $row->sabtu,
                'minggu' => $row->minggu,
                'fotodokter' => $row->fotodokter
            ];

            }  
            return $this->respond($jadwal, 200);
         
         
    }

    public function getUserBy($id)
    {
        $data = $this->jadwal->getJadwal($id);

        $jadwal = [
            'id' => intval($data['id']),
            'namadokter' => $data['namadokter'],
            'spesialis' => $data['spesialis'],
            'senin' => $data['senin'],
            'selasa' => $data['selasa'],
            'rabu' => $data['rabu'],
            'kamis' => $data['kamis'],
            'jumat' => $data['jumat'],
            'sabtu' => $data['sabtu'],
            'minggu' => $data['minggu']
        ];
            
        return $this->respond($jadwal, 200);
        
    }
}