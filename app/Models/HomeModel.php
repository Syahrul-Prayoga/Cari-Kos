<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
  protected $table = 'list-kos';
  protected $allowedFields = ['title', 'img', 'telp']; //fungsi untuk memperbolehkan field mana saja yang bisa diisi secara manual ke database

  public function getKos($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}
