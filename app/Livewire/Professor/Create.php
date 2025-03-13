<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $email;
    public $nif;
    public $materia_dominante;
    

    public function render()
    {
        return view('livewire.professor.create');
    }   

    public function store()
    {
        Professor::create([
            'nome' => $this->nome,
            'email_' => $this->email,
            'nif' => $this->nif,
            'materia_dominante' => $this->materia_dominante,
            
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
   
}
