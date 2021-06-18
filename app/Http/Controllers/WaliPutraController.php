<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\WaliPutraModel;

class WaliPutraController extends Controller
{

    public function __construct() {
        $this->WaliPutraModel = new WaliPutraModel();
    }

    public function index()
    {
        $data = [
            'waliPutraCollection' => $this->WaliPutraModel->show_all()
        ];
        return view('wali-putra/dasbor', $data);
    }

    public function detail($id)
    {
        $data = [
            'waliPutraCollection' => $this->WaliPutraModel->show_single($id)
        ];
        return view('wali-putra/detail', $data);
    }

    public function tambah()
    {
        return view('wali-putra/form-tambah');
    }

    public function simpan()
    {
        // Form Validation
        if(Request() -> id_wali_putra) {
            Request() -> validate([
                'nik' => 'bail|numeric|required|min:16'
            ]);
        } else {
            Request() -> validate([
                'nik' => 'bail|numeric|required|unique:tb_wali_putra,nik|min:16'
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
        if(Request() -> id_wali_putra) {
            $id = Request() -> id_wali_putra;
            // Update
            $this-> WaliPutraModel -> update_by_id($id, $data);
        } else {
            // Insert
            $this-> WaliPutraModel -> store($data);
        }
        return redirect()->route('dasborWaliPutra')->with('notifikasi', 'Data berhasil disimpan!');
    }

    public function sunting($id)
    {
        $data = [
            'waliPutraCollection' => $this->WaliPutraModel->show_single($id)
        ];
        return view('wali-putra/form-sunting', $data);
    }

    public function hapus()
    {
        $this->WaliPutraModel->delete_by_id(Request() -> id_wali_putra);
        return redirect()->route('dasborWaliPutra')->with('notifikasi', 'Data berhasil dihapus!');
    }
}
