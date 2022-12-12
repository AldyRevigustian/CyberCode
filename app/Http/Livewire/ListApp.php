<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class ListApp extends Component
{
    public $search = '';
    public $year;

    public function render()
    {
        $year = $this->year;
        $search = $this->search;
        $filter = Application::where('year', $year);
        // $application = $filter->where('name', 'like', '%' . $this->search . '%')
        //     ->orWhere('created_by', 'like', '%' . $this->search . '%')
        //     ->get();
        $application = $filter->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('created_by', 'like', '%' . $this->search . '%');
        })->get();
        return view('livewire.list-app', compact('application', 'year'));
    }
}
