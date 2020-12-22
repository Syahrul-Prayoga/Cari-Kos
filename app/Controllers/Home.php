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

	public function save()
	{
		// ambil gambar
		$fileImg = $this->request->getFile('kosImg');
		// cek apakah ada gambar yang di upload
		if ($fileImg->getError() == 4) {
			$namaImg = 'default.png';
		} else {
			// generate nama file gambar
			$namaImg = $fileImg->getRandomName();
			// pindahkan file
			$fileImg->move('img', $namaImg);
		}


		$this->HomeModel->save([
			'title' => $this->request->getVar('kosTitle'),
			'img' => $namaImg,
			'telp' => $this->request->getVar('kosTelp'),
			'alamat' => $this->request->getVar('kosAlamat')
		]);

		session()->setFlashData('pesan', 'Data berhasil Ditambahkan');

		return redirect()->to('/');
	}

	public function update($id)
	{

		$fileImg = $this->request->getFile('kosImg');

		// cek gambar, apakah ada perubahan gambar
		if ($fileImg->getError() == 4) {
			$namaImg = $this->request->getVar('imgLama');
		} else {
			$namaImg = $fileImg->getRandomName();
			// pindahkan gambar
			$fileImg->move('img', $namaImg);
			// hapus file yang lama
			unlink('img/' . $this->request->getVar('imgLama'));
		}

		$this->HomeModel->save([
			'id' => $id,
			'title' => $this->request->getVar('kosTitle'),
			'img' => $namaImg,
			'telp' => $this->request->getVar('kosTelp'),
			'alamat' => $this->request->getVar('kosAlamat')
		]);

		session()->setFlashData('pesan', 'Data berhasil Diubah');

		return redirect()->to('/home/detail/' . $id);
	}

	public function delete($id)
	{
		// cari gambar berdasarkan id
		$home = $this->HomeModel->find($id);

		// cek jika file gambar default
		if ($home['img'] != 'default.png') {
			// hapus gambar
			unlink('img/' . $home['img']);
		}

		$this->HomeModel->delete($id);

		session()->setFlashData('pesan', 'Data berhasil DiHapus');

		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
