@extends('layouts.main')
@section('title','Mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="card-header"></div>
    <div class="card-body">
        @php
            $minat = explode(',',$mhs->minat);   

        @endphp
        <form action="/mahasiswa/update/{{ $mhs->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group w-25 ">
                <label>NIM</label>
                <input type="number" name="nim"  class="form-control" value="{{ $mhs->nim }}" readonly>
            </div>
            <div class="form-group w-50">
                <label>NAMA</label>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
            </div>
            <label>GENDER</label>
            <div class="form-check ">
                <input type="radio" name="gender" value="pria" class="form-check-input" {{ ($mhs->gender == 'pria') ?'checked':''}}>
                <label>Pria</label>
            </div>
            <div class="form-check ">
                <input type="radio" name="gender" value="wanita" class="form-check-input" {{ ($mhs->gender == 'wanita')? 'checked':''}}>
                <label>Wanita</label>
            </div>                
            <div class="form-group w-50">
                <label>Program Studi</label>
                <select name="jurusan" class="form-control">
                        <option value="0"> --Pilih Program Studi--  </option>
                        <option value="Sistem Informasi" {{ ($mhs->jurusan == 'Sistem Informasi') ? 'selected':'' }}>Sistem Informasi</option>
                        <option value="Kedokteran" {{ ($mhs->jurusan == 'Kedokteran') ? 'selected':'' }}>Kedokteran</option>
                        <option value="Hukum" {{ ($mhs->jurusan == 'Hukum') ? 'selected':'' }}>Hukum</option>
                        <option value="Manajemen" {{ ($mhs->jurusan == 'Manajemen') ? 'selected':'' }}>Manajemen</option>
                        <option value="Bisnis Internasional" {{ ($mhs->jurusan == 'Bisnis Internasional') ? 'selected':'' }}>Bisnis Internasional</option>
                </select>
            </div>
        <label>MINAT</label>
        <div class="form-check ">
            <input type="checkbox" name="minat[]" value="Ai"  class="form-check-input" {{ in_array('Ai',$minat) ?'checked':'' }} >
            <label>Artificial Intelegent</label>
        </div>
        <div class="form-check ">
            <input type="checkbox" name="minat[]" value="bussiness" class="form-check-input" {{ in_array('bussiness',$minat) ?'checked':'' }}>
            <label>Enterprenuer</label>
        </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</div>
@endsection