<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Skills extends Component
{
    public $skills = [
        [
'name' =>' Laravel '
        ],
    ];

    public $newSkill;

public function addSkill(){
    if($this->newSkill == ''){
        return;
    }
    $this->skills[] = [
    'name'=>$this->newSkill   
    ];
    $this->newSkill ="";
}
public function mount($skillz){
    //$this->newSkill = 'Im from mounted function';
    $this->newSkills = $skillz;

}
    public function render()
    {
        return view('livewire.skills');
    }
}
