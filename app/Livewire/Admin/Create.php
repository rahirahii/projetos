<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class Create extends Component
{

    
    public $nome;
    public $email;
    
    

    public function render()
    {
        return view('livewire.admin.create');
    }

    public function store()
    {
        Admin::create([
            'nome' => $this->nome,
            'email' => $this->email
           
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
   
}
