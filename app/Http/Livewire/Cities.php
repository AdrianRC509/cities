<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cities extends Component
{
    public $search = "";
    public $sortBy = 'name';
    public $direction = 'asc';



    protected $queryString = [
        'search'=>['except'=>''],
        'sortBy'=>['except'=>'name'],
        'direction'=>['except'=>'asc']
    ];
    
    public function SortList($field, $direction){
        $this->sortBy = $field;
        $this->direction = $direction;
    }
    public function render()
    {
        $all_cities = \App\Models\City::where('name', 'like', "%$this->search%")
            ->orWhere('county', 'like', "%$this->search%")
            ->orderBy($this->sortBy, $this->direction)
            ->get();
        return view('livewire.cities', ['cities' => $all_cities]);
    }

}
