<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $email;
    public $nif;
    public $materia_dominante;
    public $password;
    

    public function render()
    {
        return view('livewire.professor.create');
    }   

    public function store()
    {
        $user = User::create([
            'name'=>$this->nome,
            'email'=>$this->email,
            'password'=>$this->password,
            'role'=> 'admin'
        ]);

        Professor::create([
            'nif' => $this->nif,
            'materia_dominante' => $this->materia_dominante,
            
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
   
}
