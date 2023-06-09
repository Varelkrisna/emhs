@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
                <div class="form-group w-25 ">
                    <label>NIM</label>
                    <input type="number" name="nim"  class="form-control" placeholder="Masukan Nim">
                </div>
                <div class="form-group w-50">
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <label>GENDER</label>
                <div class="form-check ">
                    <input type="radio" name="gender" value="pria" class="form-check-input">
                    <label>Pria</label>
                </div>
                <div class="form-check ">
                    <input type="radio" name="gender" value="wanita" class="form-check-input">
                    <label>Wanita</label>
                </div>                
                <div class="form-group w-50">
                    <label>Program Studi</label>
                    <select name="jurusan" class="form-control">
                            <option value="0"> --Pilih Program Studi--  </option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Bisnis Internasional">Bisnis Internasional</option>
                    </select>
                </div>
            <label>MINAT</label>
            <div class="form-check ">
                <input type="checkbox" name="minat[]" value="Ai"  class="form-check-input">
                <label>Artificial Intelegent</label>
            </div>
            <div class="form-check ">
                <input type="checkbox" name="minat[]" value="bussiness" class="form-check-input">
                <label>Enterprenuer</label>
            </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
