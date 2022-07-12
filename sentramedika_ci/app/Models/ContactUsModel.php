<?php

namespace App\Models;

use CodeIgniter\Model;


class ContactUsModel extends Model
{
    protected $table = 'contactus';
    protected $allowedFields = ['nama', 'email', 'pesan'];

    public function getContactUs($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('contactus')->like('nama', $keyword)->orLike('email', $keyword);
    }
}
