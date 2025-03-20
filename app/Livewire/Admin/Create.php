<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    
    public $nome;
    public $email;
    public $password;
    
    

    public function render()
    {
        return view('livewire.admin.create');
    }

    public function store()
    {
        $user = User::create([
            'name'=>$this->nome,
            'email'=>$this->email,
            'password'=>$this->password,
            'role'=> 'professor'
        ]);


        Admin::create([
            'nome' => $this->nome,
            'email' => $this->email
           
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
   
}
