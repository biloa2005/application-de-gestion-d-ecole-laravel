<?php

namespace App\Livewire;
use App\Models\SchoolYear;
use App\Http\Controllers\SchoolYearController;
use Carbon\Carbon;
use Livewire\Component;

class CreateSchoolYear extends Component
{
    public $libelle;
    public function store(SchoolYear $schoolYear){
        $this->validate([
            'libelle'=>'string|required'
        ]);
        $currentYear = Carbon::now()->format('Y');
        $schoolYear->school_year=$this->libelle;
        $schoolYear->current_year=$currentYear;
        $schoolYear->save();
        return redirect()->back()->with("success","Annee scolaire ajouter");
    }
    public function render()
    {
        return view('livewire.create-school-year');
    }
}
