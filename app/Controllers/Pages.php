<?php

namespace App\Controllers;

class Pages extends BaseController
{


  public function index()
  {
  }

  public function login()
  {
    $data = [
      'title' => 'Login | Cari Kos'
    ];
    return view('pages/login', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Register | Cari Kos'
    ];
    return view('pages/register', $data);
  }
  //--------------------------------------------------------------------

}
