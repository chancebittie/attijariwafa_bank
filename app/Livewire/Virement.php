<?php

namespace App\Livewire;

use Livewire\Component;

class Virement extends Component
{
    public $montant;
    public $nom;
    public $prenom;
    public $country;
    public $city;
    public $banque_name;
    public $banque_number;
    public $iban;
    public $swift;
    public $s=false;

    // protected $rules=[
    //     "montant"=>"required|min:11|integer",
    //     "banque_number"=>"min:11|integer",
    //     // "montant"=>"required|min:11|integer",
    //     "nom"=>"required|string|min:4",
    //     "prenom"=>"required|min:4|string",
    //     "country"=>"required|min:3|string",
    //     "city"=>"required|string|min:3",
    //     "banque_name"=>"required|string|min:3",
    //     "swift"=>"required|min:4|integer",
    // ];

    // protected $messages=[
    //     "banque_name.required"=>"Le nom de la banque est obligatoire",
    //     "banque_name.min"=>"Le nom de la banque doit contenir au moins 3 caracteres",
    //     "banque_name.string"=>"Le nom de la banque doit etre",
    // ];

    public function updated($propertedNane){
        return $this->validateOnly($propertedNane);
    }

    public function render()
    {
        return view('livewire.virement');
    }

    public function submit(){
        $this->dispatch("toast");
        // $this->s=!$this->s;
    }
    public function nonValider(){
        $this->dispatch("nonValide");
        // $this->s=!$this->s;
    }
}
