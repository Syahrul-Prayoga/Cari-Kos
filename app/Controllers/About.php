<?php

namespace App\Controllers;

class About extends BaseController
{

  public function index()
  {
    $data = [
      'title' => 'About | Cari Kos'
    ];
    return view('about/index', $data);
  }
}
