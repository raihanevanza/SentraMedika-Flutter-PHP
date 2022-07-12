<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class ObatAPIModel extends Model {
 
    protected $table = 'obat';
 
    public function getObat($id = false)
    {
        if($id === false){
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->where(['id' => $id])->first();
        }  
    }
}