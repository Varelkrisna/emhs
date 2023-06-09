<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;
class IndexTask extends Component
{
    protected $listeners = [
        'indexTask'
    ];

    public function render()
    {
        $tsk = Task::orderBy('id','desc')->paginate(5);
        return view('livewire.index-task',['tsk' => $tsk]);
    }

    public function indexTask($task)
    {
        
    }
}
