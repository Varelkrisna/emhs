<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskAPIController extends Controller
{
    
        public function read()
        {
            $task = Task::all();
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil DiTampilkan',
                'data' =>$task
            ],200);
        }
    
        public function create(Request $request)
        {
            $task = Task::create([
                'nama' => $request->nama,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,

            ]);
            if($task)
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
            $task = Task::find($id)->update([
                'nama' => $request->nama,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            if($task)
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
            $task = Task::find($id)->delete();
    
            if($task)
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
