<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel
        $tb_pasien = DB::table('tb_pasien')->get();

        // mengirim data ke view
        return view('VPasien', ['tb_pasien' => $tb_pasien]);
    }

    public function tambah(Request $request)
    {
        DB::table('tb_pasien')->insert([
            'kd_pasien' => $request->kd_pasien,
            'nama_pasien' => $request->nama_pasien,
            'alamat_pasien' => $request->alamat_pasien,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'spesialis' => $request->spesialis,
        ]);
        // alihkan halaman ke halaman berita
        return redirect('/tb_pasien');
    }

    public function hapus(Request $request)
    {
        $kd_pasien = $request->kd_pasien;
        DB::table('tb_pasien')->where('kd_pasien', $kd_pasien)->delete();

        // alihkan halaman ke halaman berita
        return redirect('/tb_pasien');
    }

    public function edit(Request $request)
    {
        DB::table('tb_pasien')->where('kd_pasien', $request->kd_pasien)->update([
            'kd_pasien' => $request->kd_pasien,
            'nama_pasien' => $request->nama_pasien,
            'alamat_pasien' => $request->alamat_pasien,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'spesialis' => $request->spesialis,
        ]);
        // alihkan halaman ke halaman berita
        return redirect('/tb_pasien');
    }
}
