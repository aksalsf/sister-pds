<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SiswaModel extends Model
{
    use HasFactory;

    public function __construct() {
        $this->table = 'tb_siswa';
    }

    public function show_all()
    {
        return DB::table($this->table)->get();
    }

    public function show_single($id)
    {
        return DB::table($this->table)->where('id_siswa', $id)->first();
    }

    public function store($data)
    {
        return DB::table($this->table)->insert($data);
    }

    public function update_by_id($id, $data)
    {
        return DB::table($this->table)
        ->where('id_siswa', $id)
        ->update([
            'nisn' => $data['nisn'],
            'nik' => $data['nik'],
            'no_kk' => $data['no_kk'],
            'nama_lengkap' => $data['nama_lengkap'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'anak_ke' => $data['anak_ke'],
            'jumlah_saudara' => $data['jumlah_saudara'],
            'id_ayah' => $data['id_ayah'],
            'id_ibu' => $data['id_ibu'],
            'id_wali' => $data['id_wali'],
            'agama' => $data['agama'],
            'alamat' => $data['alamat'],
            'no_telp' => $data['no_telp'],
            'surel' => $data['surel'],
            'foto' => $data['foto'],
            'sekolah_asal' => $data['sekolah_asal'],
        ]);
    }

    public function delete_by_id($id)
    {
        return DB::table($this->table)->where('id_siswa', $id)->delete();
    }
}
