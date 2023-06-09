<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Nama</label>
            <input wire:model="nama" type="text" name="" id="" class="form-control" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" name="" id="" class="form-control" placeholder="Masukan Judul">
        </div>

        <div class="class form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi" cols="30" rows="10" class="form-control" placeholder="Masukan Deskripsi"></textarea>
        </div>
        <div class="class form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        
    </form>
</div>
