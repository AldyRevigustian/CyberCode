<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;

class ListApp extends Component
{
    public $search = '';
    public function render()
    {
        $application = Application::where('name', 'like', '%' . $this->search . '%')
            ->where('created_by', 'like', '%' . $this->search . '%')
            ->where('year', 'like', '%' . $this->search . '%')->get();
        return view('livewire.list-app', compact('application'));
    }
}
