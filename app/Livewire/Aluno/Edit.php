<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;

use Illuminate\Support\Facades\Auth ;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $nome;
    public $email_educacional;
    public $rm;
    public $ano_escolar;

    public function mount()
    {
        $aluno = Aluno::find(Auth::user()->aluno->id);

        //relacionar a tabela users com a tabela aluno
        //relacionar a model users com a model aluno (hasOne e belongsTo)
        //dd($aluno@user9.com)
        $this->alunoId = $aluno->id;
        $this->nome = $aluno->user->name;
        $this->email_educacional = $aluno->user->email;
        $this->rm = $aluno->rm;
        $this->ano_escolar = $aluno->ano_escolar;
    }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);
        $aluno->user->name = $this->nome;
        $aluno->user->email = $this->email_educacional;
        $aluno->rm = $this->rm;
        $aluno->ano_escolar = $this->ano_escolar;

        $aluno->user->save();
        


        session()->flash('success', 'Aluno atualizado');
    }

    public function render()
    {
        return view('livewire.aluno.edit');
    }
}
