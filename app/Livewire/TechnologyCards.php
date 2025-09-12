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
        $tecnologies = Technology::paginate(3);

        return view('livewire.technology-cards', [
            'tecnologies' => $tecnologies,
        ]);
    }
}
