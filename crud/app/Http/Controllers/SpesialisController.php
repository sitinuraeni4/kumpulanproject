<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpesialisController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel
        $tb_spesialis = DB::table('tb_spesialis')->get();

        // mengirim data ke view
        return view('VSpesialis', ['tb_spesialis' => $tb_spesialis]);
    }
    public function tambah(Request $request)
    {
        DB::table('tb_spesialis')->insert([
            'kd_spesialis' => $request->kd_spesialis,
            'spesialis' => $request->spesialis,
        ]);
        // alihkan halaman ke halaman berita
        return redirect('/tb_spesialis');
    }
    public function hapus(Request $request)
    {
        $kd_spesialis = $request->kd_spesialis;
        DB::table('tb_spesialis')->where('kd_spesialis', $kd_spesialis)->delete();

        // alihkan halaman ke halaman berita
        return redirect('/tb_spesialis');
    }
    public function edit(Request $request)
    {
        DB::table('tb_spesialis')->where('kd_spesialis', $request->kd_spesialis)->update([
            'kd_spesialis' => $request->kd_spesialis,
            'spesialis' => $request->spesialis,
        ]);
        // alihkan halaman ke halaman berita
        return redirect('/tb_spesialis');
    }
}
