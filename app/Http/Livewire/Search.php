<?php

namespace App\Http\Livewire;

use App\Models\Jobs;
use Livewire\Component;

class Search extends Component
{

    public $search = '';
    public function render()
    {
        $datalist = Jobs::where('title','%'.$this->search.'%')->get();

        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]);
    }
}
