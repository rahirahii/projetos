<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email_educacional;
    public $rm;
    public $ano_escolar;
    public $password;
    
    
    

    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store()
    {
       $user = User::create([
            'name'=>$this->nome,
            'email'=>$this->email_educacional,
            'password'=>$this->password,
            'role'=> 'aluno'
        ]);

        //cadastrar user antes do aluno
        //pegar o id do user criado e inserir no aluno abaixo
        Aluno::create([
            'rm' => $this->rm,
            'ano_escolar' => $this->ano_escolar,
            'user_id'=> $user->id
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
}
