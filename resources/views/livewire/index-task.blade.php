<div>
    @foreach ($tsk as $t)
    <div class="card">
      <div class="card-header bg-warning">
        <Strong class="text-light">Data Terbaru</Strong>   
      </div>
      <div class="card-body">
       <strong> <h5 class="card-title">{{ $t->nama }}</h5></strong>
        <h5 class="card-title">{{ $t->judul }}</h5>
        <p class="card-text">{{ $t->deskripsi }}</p>
      </div>
    </div>
    @endforeach
      
  </div>
  