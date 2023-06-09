<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;
class FormTask extends Component
{
 
    public $nama;
    public $judul;
    public $deskripsi;
    public function render()
    {
        return view('livewire.form-task');
    }

    public function simpan()
    {
       $task = Task::create([
            'nama'=> $this->nama,
            'judul'=> $this->judul,
            'deskripsi'=> $this-> deskripsi
        ]);

        $this->resetInput();

        //triger
        $this->emit('indexTask',$task );
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->judul = null;
        $this->deskripsi = null;
    }
}
