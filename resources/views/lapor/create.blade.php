@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
    <h2>Form Pelaporan Kejadian Banjir</h2>
    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" required placeholder="Masukkan nama Anda">
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" id="lokasi" name="lokasi" required placeholder="Contoh: Dayeuhkolot">
        </div>
        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" required placeholder="Contoh: 50">
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection