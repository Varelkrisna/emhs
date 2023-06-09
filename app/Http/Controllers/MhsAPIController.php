<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil DiTampilkan',
            'data' =>$mhs
        ],200);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $request->minat
        ]);
        if($mhs)
        {
            return response()->json([
                'success'=> true,
                'message'=> 'Data Berhasil DiTambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan'
            ],401);
        }
    }

    public function update($id,Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $request->minat,
        ]);
        if($mhs)
        {
            return response()->json([
                'success'=> true,
                'message'=> 'Data Berhasil DiUbah'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal DiUbah'
            ],401);
        }
    }
    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();

        if($mhs)
        {
            return response()->json([
                'success'=> true,
                'message'=> 'Data Berhasil Dihapus'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Dihapus'
            ],401);
        }
    }
}
