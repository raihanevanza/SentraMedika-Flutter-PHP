<?php

namespace App\Models;

use CodeIgniter\Model;


class ContactUsUserModel extends Model
{
    protected $table = 'contactus';
    protected $allowedFields = ['nama', 'email', 'pesan'];

    public function getContactUsUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
