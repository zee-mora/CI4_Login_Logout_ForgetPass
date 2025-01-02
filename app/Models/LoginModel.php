<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $allowedFields = ['username', 'password', 'email'];
    protected $table            = 'users';

    public function insertUser($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getUser($username)
    {
        return $this->db->table($this->table)->where('username', $username)->get()->getRowArray();
    }

    public function destroy($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function getOne($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get()->getRowArray();
    }
}
