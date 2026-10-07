<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Halaman Form Pelaporan
    public function create()
    {
        return view('lapor.create');
    }

    // Memproses Data Form (POST) & Redirect ke Konfirmasi
    public function store(Request $request)
    {
        $data = $request->only(['nama_pelapor', 'lokasi', 'tinggi_air']);
        return redirect()->route('lapor.konfirmasi')->with('data', $data);
    }

    // Halaman Konfirmasi Laporan
    public function konfirmasi()
    {
        $data = session('data');
        return view('lapor.konfirmasi', compact('data'));
    }

    // Halaman Daftar Laporan
    public function index()
    {
        $laporanList = [
            [
                'nama_pelapor' => 'Budi Santoso',
                'lokasi' => 'Dayeuhkolot',
                'tinggi_air' => 25,
                'waktu' => '10 Menit yang lalu'
            ],
            [
                'nama_pelapor' => 'Siti Aminah',
                'lokasi' => 'Baleendah',
                'tinggi_air' => 50,
                'waktu' => '30 Menit yang lalu'
            ],
            [
                'nama_pelapor' => 'Asep Sunandar',
                'lokasi' => 'Bojongsoang',
                'tinggi_air' => 85,
                'waktu' => '1 Jam yang lalu'
            ],
        ];

        return view('lapor.index', compact('laporanList'));
    }
}