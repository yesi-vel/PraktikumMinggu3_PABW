<div class="card" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 5px;">
    <h3>{{ $buku['judul'] }}</h3>
    <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
    <p><strong>Kategori:</strong> {{ $buku['kategori'] }}</p>
    
    {{-- Directive Percabangan @if untuk mengecek stok --}}
    <p><strong>Status Ketersediaan:</strong> 
        @if($buku['stok'] > 0)
            <span style="color: green; font-weight: bold;">Tersedia (Stok: {{ $buku['stok'] }})</span>
        @else
            <span style="color: red; font-weight: bold;">Dipinjam (Stok Habis)</span>
        @endif
    </p>
</div>