<?php

namespace App\Controllers;

class Maps extends BaseController
{

  public function index()
  {
    $data = [
      'title' => 'Maps | Cari Kos'
    ];
    return view('maps/index', $data);
  }
}
