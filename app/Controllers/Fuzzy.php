<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\Info;
use Config\Database;
use Config\Services;
use Mpdf\Mpdf;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

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
            'title' => "SPK | Informasi Data",
            'info' => $info_data->findAll(),
        ];
        return view('pages/info', $data);
    }

    public function prediksi()
    {
        $db = Database::connect();
        $builder = $db->table('info');

        $prod_max = $builder->selectMax('prod_ton')->get();
        $prod_min = $builder->selectMin('prod_ton')->get();

        $penj_max = $builder->selectMax('penj_ton')->get();
        $penj_min = $builder->selectMin('penj_ton')->get();

        $stok_max = $builder->selectMax('stok_ton')->get();
        $stok_min = $builder->selectMin('stok_ton')->get();
        // var_dump($prod_max->getRow())
        $data = [
            'title' => "SPK | Metode Fuzzy Tsukamoto",
            'prod_max' => $prod_max->getRow()->prod_ton,
            'prod_min' => $prod_min->getRow()->prod_ton,
            'penj_max' => $penj_max->getRow()->penj_ton,
            'penj_min' => $penj_min->getRow()->penj_ton,
            'stok_max' => $stok_max->getRow()->stok_ton,
            'stok_min' => $stok_min->getRow()->stok_ton,
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

    public function delete($id)
    {
        $data = new Info();
        $success = $data->delete($id);
        if ($success) {
            session()->setFlashData('message', 'Data Berhasil Dihapus !');
            return redirect()->to('/info');
        }

    }

    public function invoice($id)
    {
        $info = new Info();
        $data = [
            'info' => $info->find($id),
            'title' => 'Invoice | SPK | Metode Fuzzy Tsukomoto',
        ];
        // return view('pages/invoice', $data);
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $mpdf->WriteHTML(view('pages/invoice2', $data));
        return redirect()->to($mpdf->Output('invoice.pdf', 'I'));
    }

    public function invoice_all()
    {
        $info = new Info();
        $data = [
            'info' => $info->findAll(),
            'title' => 'Invoice All | SPK | Metode Fuzzy Tsukomoto',
        ];
        // return view('pages/invoice', $data);
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        // $mpdf->showImageErrors = true;
        $mpdf->WriteHTML(view('pages/invoice', $data));
        return redirect()->to($mpdf->Output('invoice_all.pdf', 'I'));
    }

    public function import()
    {
        $validation = Services::validation();
        $valid = $this->validate([
            'filename' => [
                'label' => 'Inputan File',
                'rules' => 'uploaded[filename]|ext_in[filename,xls,xlsx]',
                'error' => [
                    'uploaded' => '{field} Wajib Diisi',
                    'ext_in' => '{field} Harus Ekstensi Format Esxcel',
                ],
            ],
        ]);

        if (!$valid) {
            $pesan = [
                'import' => $validation->getError(),
            ];
            session()->setFlashData($pesan, "Caption !!");
            return redirect()->to('/info');
        } else {
            $file_excel = $this->request->getFile('filename');
            $ext = $file_excel->getClientExtension();
            if ($ext == 'xls') {
                $render = new Xls();
            } else {
                $render = new Xlsx();
            }

            $spreadsheet = $render->load($file_excel);
            $data = $spreadsheet->getActiveSheet()->toArray();

            $db = Database::connect();
            $db->table('info')->truncate();
            foreach ($data as $x => $row) {
                if ($x == 0) {
                    continue;
                }
                $deskripsi = $row[1];
                $nilai_produksi = $row[2];
                $nilai_penjualan = $row[3];
                $nilai_ton = $row[4];

                $datasimpan = [
                    'deskripsi' => $deskripsi,
                    'prod_ton' => $nilai_produksi,
                    'penj_ton' => $nilai_penjualan,
                    'stok_ton' => $nilai_ton,
                ];
                $db->table('info')->insert($datasimpan);
            }
            session()->setFlashData('message', 'Data Berhasil Terimport !');
            return redirect()->to('/info');
        }

    }

}