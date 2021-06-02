<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\Info;
use Config\Services;
use Exception;

class Fuzzy extends BaseController
{
	protected $Info;

	public function __construct()
	{
		$this->Info = new Info();
	}

	public function index()
	{
	}

	public function info()
	{
		$info_data = new Info();
		$data = [
			'title'	=> "SPK | Informasi Data",
			'info'	=> $info_data->findAll()
		];
		return view('pages/info', $data);
	}

	public function prediksi()
	{
		$data = [
			'title'		=> "SPK | Metode Fuzzy Tsukamoto"
		];
		return view('pages/prediksi', $data);
	}

	public function save()
	{
		$request = \Config\Services::request();
		$data['penj_ton'] = $this->request->getVar('penjualan');
		$data['prod_ton'] = $this->request->getVar('produksi');
		$data['stok_ton'] = $this->request->getVar('persediaan');
		$data['deskripsi'] = $this->request->getVar('deskripsi');
		$success = $this->Info->save($data);
		if ($success) {
			session()->setFlashData('message', 'Data Berhasil Ditambah !');
			return redirect()->to('/info');
		}
	}
}
