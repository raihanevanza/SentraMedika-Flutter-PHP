<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
 
use App\Models\ObatAPIModel;
 
class ObatAPI extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\ObatAPIModel';
 
    public function __construct()
    {
        $this->obat = new ObatAPIModel;
    }
 
    public function index()
    {
        $data = $this->obat->getObat();
 
        foreach ($data as $row) { 
 
            $obat[] = [
                'id' => intval($row->id),
                'namaobat' => $row->namaobat,
                'kategori' => $row->kategori,
                'stok' => $row->stok,
                'fotoobat' => $row->fotoobat
            ];

            }  
            return $this->respond($obat, 200);
         
         
    }
}