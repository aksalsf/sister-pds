<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\WaliPutriModel;

class WaliPutriController extends Controller
{

    public function __construct() {
        $this->WaliPutriModel = new WaliPutriModel();
    }

    public function index()
    {
        $data = [
            'waliPutriCollection' => $this->WaliPutriModel->show_all()
        ];
        return view('wali-putri/dasbor', $data);
    }

    public function detail($id)
    {
        $data = [
            'waliPutriCollection' => $this->WaliPutriModel->show_single($id)
        ];
        return view('wali-putri/detail', $data);
    }

    public function tambah()
    {
        return view('wali-putri/form-tambah');
    }

    public function simpan()
    {
        // Form Validation
        if(Request() -> id_wali_putri) {
            Request() -> validate([
                'nik' => 'bail|numeric|required|min:16'
            ]);
        } else {
            Request() -> validate([
                'nik' => 'bail|numeric|required|unique:tb_wali_putri,nik|min:16'
            ]);
        }
        Request() -> validate([
            'nama' => 'required',
            'pendidikan' => [
                'required',
                Rule::in(['TK', 'SD', 'SMP', 'SMA', 'S1', 'S2', 'S3', '-'])
            ],
            'pekerjaan' => 'required',
            'no_telp' => 'required|numeric',
            'alamat' => 'required'
        ]);
        // Menyimpan data
        $data = [
            'nik' => Request() -> nik,
            'nama' => Request() -> nama,
            'pendidikan' => Request() -> pendidikan,
            'pekerjaan' => Request() -> pekerjaan,
            'no_telp' => Request() -> no_telp,
            'alamat' => Request() -> alamat,
        ];
        // Memeriksa apakah ada data id, kalo ada berarti data disimpan dengan proses update
        if(Request() -> id_wali_putri) {
            $id = Request() -> id_wali_putri;
            // Update
            $this-> WaliPutriModel -> update_by_id($id, $data);
        } else {
            // Insert
            $this-> WaliPutriModel -> store($data);
        }
        return redirect()->route('dasborWaliPutri')->with('notifikasi', 'Data berhasil disimpan!');
    }

    public function sunting($id)
    {
        $data = [
            'waliPutriCollection' => $this->WaliPutriModel->show_single($id)
        ];
        return view('wali-putri/form-sunting', $data);
    }

    public function hapus()
    {
        $this->WaliPutriModel->delete_by_id(Request() -> id_wali_putri);
        return redirect()->route('dasborWaliPutri')->with('notifikasi', 'Data berhasil dihapus!');
    }
}
