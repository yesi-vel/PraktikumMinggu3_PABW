<div class="card">
    <h3>Lokasi: {{ $laporan['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama_pelapor'] }}</p>
    <p><strong>Tinggi Genangan Air:</strong> {{ $laporan['tinggi_air'] }} cm</p>
    
    <p><strong>Status Genangan:</strong> 
        @if($laporan['tinggi_air'] < 30)
            <span class="badge bg-waspada">Waspada</span>
        @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
            <span class="badge bg-siaga">Siaga</span>
        @else
            <span class="badge bg-awas">Awas</span>
        @endif
    </p>
    
    @if(isset($laporan['waktu']))
        <small style="color: #6c757d;">Dilaporkan: {{ $laporan['waktu'] }}</small>
    @endif
</div>