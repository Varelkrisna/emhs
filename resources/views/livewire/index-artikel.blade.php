<div>
  @foreach ($art as $a)
  <div class="card">
    <div class="card-header bg-info">
      <Strong class="text-light">Data Terbaru</Strong>   
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $a->judul }}</h5>
      <p class="card-text">{{ $a->deskripsi }}</p>
    </div>
  </div>
  @endforeach
    
</div>
