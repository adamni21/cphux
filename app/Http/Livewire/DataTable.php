<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataTable extends Component
{
    public $data;

    public $columns;

    public function render()
    {
        return view('livewire.data-table');
    }
}
