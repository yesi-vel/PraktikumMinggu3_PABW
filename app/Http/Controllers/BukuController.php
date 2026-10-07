<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukuList = [
            [
                'judul' => 'Pemrograman Web dengan Laravel',
                'penulis' => 'Ahmad Nuansyah',
                'kategori' => 'Teknologi',
                'stok' => 5
            ],
            [
                'judul' => 'Belajar Dasar UI/UX Design',
                'penulis' => 'Dian Sastro',
                'kategori' => 'Desain',
                'stok' => 0
            ],
            [
                'judul' => 'Algoritma dan Struktur Data',
                'penulis' => 'Budi Raharjo',
                'kategori' => 'Teknologi',
                'stok' => 2
            ]
        ];

        return view('buku.index', compact('bukuList'));
    }
}