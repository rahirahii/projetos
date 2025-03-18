<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Editar extends Component
{
    public $alunoId;
    public $nome;
    public $email_educacional;
    public $rm;
    public $ano_escolar;

        public function mount(){
            $aluno = Aluno::find(Auth::user()->id);

            //relacionar a tabela users com a tabela aluno
            //relacionar a model users com a model aluno (hasOne e belongsTo)

            $this->alunoId = $aluno->id;
            $this->nome = $aluno->nome;
            $this->email_educacional = $aluno->email_educacional;
            $this->rm = $aluno->rm;
            $this->ano_escolar = $aluno->ano_escolar;

        }

        public function salvar(){
            $aluno = Aluno::find($this->alunoId);
            $aluno->nome = $this->nome;
            $aluno->email_educacional = $this->email_educacional;
            $aluno->rm = $this->rm;
            $aluno->ano_escolar = $this->ano_escolar;

            $aluno->save();

        session()->flash('success', 'Aluno atualizada');
        }

    public function render()
    {
        return view('livewire.aluno.editar');
    }
}
