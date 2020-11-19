<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $HomeModel;
	public function __construct()
	{
		$this->HomeModel = new \App\Models\HomeModel();
	}

	public function index()
	{
		// $list = $this->HomeModel->findAll();

		$data = [
			'title' => 'Home | Cari Kos',
			'list' => $this->HomeModel->getKos()
		];

		return view('home/index', $data);
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail | Cari Kos',
			'detail' => $this->HomeModel->getKos($id)
		];

		// Jika data tidak ada
		if (empty($data['detail'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak Ditemukan');
		}
		return view('home/detail', $data);
	}

	// public function create()
	// {
	// 	$data = [
	// 		'title' => 'Tambah Data | Cari Kos'

	// 	];

	// 	return view('home/create', $data);
	// }

	public function save()
	{
		$this->HomeModel->save([
			'title' => $this->request->getVar('kosTitle'),
			'img' => $this->request->getVar('kosImg'),
			'telp' => $this->request->getVar('kosTelp')
		]);

		session()->setFlashData('pesan', 'Data berhasil Ditambahkan');

		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
