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
            'libelle'=>'string|required|unique:school_years,school_year'
        ]);
       try{
         $currentYear = Carbon::now()->format('Y');
         $check=SchoolYear::where('current_year',$currentYear)->get();
         $alreadyExist=$check->count();
         if($alreadyExist >= 1){
              return redirect()->back()->with('error','L\'annee en cour a deja ete ajoute');
         }else{
        $schoolYear->school_year=$this->libelle;
        $schoolYear->current_year=$currentYear;
        $schoolYear->save();
           if($schoolYear){
            $this->libelle="";

           }
            return redirect()->route('settings')->with("success","Annee scolaire ajouter");
         }
       
       }catch(Exception $e){
        //sera pris en com^pte si on a un pb
       }
    }
    public function render()
    {
        return view('livewire.create-school-year');
    }
}
