<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Index extends Component
{
    public $alunoId;
    public $nome;
    public $email_educacional;
    public $rm;
    public $ano_escolar;
    public $senha;

    protected $listeners = [
        'abrirModalEdicao',
        'projetoAtualizar' => "render"
    ];

    public function render()
    {
        $aluno = Aluno::all();
        return view('livewire.aluno.index', compact('aluno'));
    }

    public function abrirModalVizualizar($alunoId)
    {
        $aluno = Aluno::find($alunoId);
        if ($aluno) {
            $this->nome = $aluno->nome;
            $this->email_educacional = $aluno->email_educacional;
            $this->rm = $aluno->rm;
            $this->ano_escolar = $aluno->ano_escolar;
            $this->senha = $aluno->senha;
        }
    }

    public function abrirModalExclusao($alunoId)
    {
        $this->alunoId = $alunoId;
    }

    public function abrirModalEdicao($alunoId)
    {
        $this->dispatch('editarAluno', alunoId: $alunoId);
    }

    public function excluir()
    {
        if ($this->alunoId) {
            Aluno::find($this->alunoId)->delete();
        }
    }
}
