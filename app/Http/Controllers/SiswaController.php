<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\SiswaModel;
use App\Models\WaliPutraModel;
use App\Models\WaliPutriModel;

class SiswaController extends Controller
{

    public function __construct() {
        $this->SiswaModel = new SiswaModel();
        $this->WaliPutraModel = new WaliPutraModel();
        $this->WaliPutriModel = new WaliPutriModel();
    }

    public function index()
    {
        $data = [
            'siswaCollection' => $this->SiswaModel->show_all()
        ];
        return view('siswa/dasbor', $data);
    }

    public function detail($id)
    {
        $data = [
            'siswa' => $this->SiswaModel->show_single($id),
            'ayah' => $this->WaliPutraModel->show_single($this-> SiswaModel -> show_single($id) -> id_ayah),
            'ibu' => $this->WaliPutriModel->show_single($this->SiswaModel->show_single($id) -> id_ibu),
            'wali' => ($this->WaliPutriModel->show_single($this->SiswaModel->show_single($id) -> id_wali) ?
            $this->WaliPutriModel->show_single($this->SiswaModel->show_single($id) -> id_ibu) :
            $this->WaliPutraModel->show_single($this-> SiswaModel -> show_single($id) -> id_wali))
        ];
        return view('siswa/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'waliPutraCollection' => $this->WaliPutraModel->show_all(),
            'waliPutriCollection' => $this->WaliPutriModel->show_all()
        ];
        return view('siswa/form-siswa', $data);
    }

    public function simpan()
    {
        // Form Validation
        if(Request() -> id_siswa) {
            Request() -> validate([
                'nisn' => 'bail|numeric|required|min:10',
                'nik' => 'bail|numeric|required|min:16',
            ]);
        } else {
            Request() -> validate([
                'nisn' => 'bail|numeric|required|unique:tb_siswa,nik|min:10',
                'nik' => 'bail|numeric|required|unique:tb_siswa,nik|min:16',
            ]);
        }

        Request() -> validate([
            'no_kk' => 'bail|numeric|required|min:16',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => [
                'required',
                Rule::in(['LK', 'PR'])
            ],
            'anak_ke' => 'required|integer|min:1',
            'jumlah_saudara' => 'required|integer',
            'id_ayah' => 'required',
            'id_ibu' => 'required',
            'id_wali' => 'required',
            'agama' => [
                'required',
                Rule::in([
                    'Islam',
                    'Protestan',
                    'Katolik',
                    'Hindu',
                    'Buddha',
                    'Khonghucu',
                ])
            ],
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'surel' => 'required|email',
            'sekolah_asal' => 'required',
        ]);

        // Memeriksa apakah ada data id, kalo ada berarti data disimpan dengan proses update
        $data = [
            'nisn' => Request() -> nisn,
            'nik' => Request() -> nik,
            'no_kk' => Request() -> no_kk,
            'nama_lengkap' => Request() -> nama_lengkap,
            'tempat_lahir' => Request() -> tempat_lahir,
            'tanggal_lahir' => Request() -> tanggal_lahir,
            'jenis_kelamin' => Request() -> jenis_kelamin,
            'anak_ke' => Request() -> anak_ke,
            'jumlah_saudara' => Request() -> jumlah_saudara,
            'id_ayah' => Request() -> id_ayah,
            'id_ibu' => Request() -> id_ibu,
            'id_wali' => Request() -> id_wali,
            'agama' => Request() -> agama,
            'alamat' => Request() -> alamat,
            'no_telp' => Request() -> no_telp,
            'surel' => Request() -> surel,
            'foto' => Request() -> foto_lama,
            'sekolah_asal' => Request() -> sekolah_asal,
        ];

        if (Request() -> file('foto')) {
            $foto = pathinfo(Request() -> file('foto')->store('public/uploads/foto'), PATHINFO_BASENAME);
            $data['foto'] = $foto;
        }

        if(Request() -> id_siswa) {
            $id = Request() -> id_siswa;
            // Update
            $this-> SiswaModel -> update_by_id($id, $data);
        } else {
            // Insert
            $this-> SiswaModel -> store($data);
        }
        return redirect()->route('dasborSiswa')->with('notifikasi', 'Data berhasil disimpan!');
    }

    public function sunting($id)
    {
        if($this->SiswaModel->show_single($id)) {

            $data = [
                'siswa' => $this->SiswaModel->show_single($id),
                'waliPutraCollection' => $this->WaliPutraModel->show_all(),
                'waliPutriCollection' => $this->WaliPutriModel->show_all(),
            ];
            
            return view('siswa/form-siswa', $data);
        } else {
            return redirect()->route('dasborSiswa')->with('notifikasi', 'Data tidak ada!');
        }
    }

    public function hapus()
    {
        $this->SiswaModel->delete_by_id(Request() -> id_siswa);
        return redirect()->route('dasborSiswa')->with('notifikasi', 'Data berhasil dihapus!');
    }
}
