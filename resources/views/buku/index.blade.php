@extends('layouts.app')

@section('title', 'Katalog Buku Tugas Akhir')

@section('content')
    <h2>Katalog Buku Perpustakaan (Simulasi Tugas Akhir)</h2>

    {{-- Komponen Alert --}}
    <x-alert type="info" message="Selamat datang di sistem katalog buku Tugas Akhir." />

    {{-- Directive Perulangan @forelse dan Partial @include --}}
    @forelse($bukuList as $buku)
        @include('partials.buku-card', ['buku' => $buku])
    @empty
        <p>Belum ada data buku.</p>
    @endforelse
@endsection