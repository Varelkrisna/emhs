<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class pageController extends Controller
{
    public function home()
    {
        return view('home',['key'=>'home']);
    }

    public function profile()
    {
        return view('profile',['key'=>'profile']);
    }

    public function mahasiswa()
    {
        $mhs = mahasiswa::orderBy('id','desc')->paginate(5);
        return view('mahasiswa',['key'=>'mahasiswa','mhs' => $mhs]);
    }
    
    public function pencarian(Request $request)
    {
        $cari = $request->q;
        $mhs = Mahasiswa::where('nama','like','%'.$cari.'%')->paginate(5);
        $mhs->appends($request->all());
        return view('mahasiswa',['key'=>'mahasiswa','mhs' => $mhs]);
    }
    public function pencariannm(Request $request)
    {
        $cari = $request->a;
        $mhs = Mahasiswa::where('nim','like','%'.$cari.'%')->paginate(5);
        $mhs->appends($request->all());
        return view('mahasiswa',['key'=>'mahasiswa','mhs' => $mhs]);
    }

    public function tambah()
    {
        return view('formtambah',['key' => 'mahasiswa']);
    }

    public function simpan(Request $request)
    {
        $minat = implode(',',$request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $minat
        ]);
        return redirect('mahasiswa')->with('success','Data Berhasil Ditambahkan');
    }
    
    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }

    public function update($id,Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $minat = implode(',',$request->get('minat'));
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->jurusan = $request->jurusan;
        $mhs->minat = $minat;
        $mhs->save();

        return redirect('mahasiswa')->with('primary','Data Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return redirect('mahasiswa')->with('danger','Data Berhasil DiHapus');
 
    }

    public function contact()
    {
        return view('contact',['key'=>'contact']);
    }
}
