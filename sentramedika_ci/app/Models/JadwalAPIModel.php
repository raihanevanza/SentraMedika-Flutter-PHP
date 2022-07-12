<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class JadwalAPIModel extends Model {
 
    protected $table = 'jadwal';
 
    public function getJadwal($id = false)
    {
        if($id === false){
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->where(['id' => $id])->first();
        }  
    }
}