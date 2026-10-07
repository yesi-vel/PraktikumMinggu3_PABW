@extends('layouts.app')

@section('title', 'Konfirmasi Pelaporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan kejadian banjir Anda berhasil dikirim!" />

    @if($data)
        <h3>Detail Laporan Anda:</h3>
        @include('partials.laporan-card', ['laporan' => $data])
    @else
        <p>Tidak ada data laporan terbaru yang dikirim.</p>
    @endif

    <a href="{{ route('lapor.index') }}"><button type="button">Lihat Semua Laporan</button></a>
@endsection