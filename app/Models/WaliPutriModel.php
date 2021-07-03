<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class WaliPutriModel extends Model
{
    use HasFactory;

    public function __construct() {
        $this->table = 'tb_wali_putri';
    }

    public function show_all()
    {
        return DB::table($this->table)->get();
    }

    public function show_single($id)
    {
        return DB::table($this->table)->where('id_wali_putri', $id)->first();
    }

    public function store($data)
    {
        return DB::table($this->table)->insert($data);
    }

    public function update_by_id($id, $data)
    {
        return DB::table($this->table)
        ->where('id_wali_putri', $id)
        ->update([
            'nik' => $data['nik'],
            'nama' => $data['nama'],
            'pendidikan' => $data['pendidikan'],
            'pekerjaan' => $data['pekerjaan'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
        ]);
    }

    public function delete_by_id($id)
    {
        return DB::table($this->table)->where('id_wali_putri', $id)->delete();
    }
}
