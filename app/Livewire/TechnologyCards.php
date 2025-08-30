<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Technology;

class TechnologyCards extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.technology-cards', [
        'tecnologies' => Technology::paginate(3)
    ]);
    }
}
