<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $nome;
    public $email_educacional;
    public $rm;
    public $ano_escolar;
    public $senha;

    protected $listeners = [
        'editarAluno',
        'closeEditModal' => "fecharModal"
    ];

    public function fecharModal()
    {
        $this->dispatch('hideModal');
    }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);
        if ($aluno) {
            $aluno->update([
                'nome' => $this->nome,
                'email_educacional' => $this->email_educacional,
                'rm' => $this->rm,
                'ano_escolar' => $this->ano_escolar,
                'senha' => $this->senha
            ]);
        }

        $this->dispatch('alunoAtualizado');
        $this->dispatch('fecharModalEdicao');
        session()->flash('message', 'Aluno Atualizado');
    }

    public function render()
    {
        return view('livewire.aluno.edit');
    }

    public function editarAluno($alunoId)
    {
        $aluno = Aluno::find($alunoId);
        if ($aluno) {
            $this->alunoId = $aluno->id;
            $this->nome = $aluno->nome;
            $this->email_educacional = $aluno->email_educacional;
            $this->rm = $aluno->rm;
            $this->ano_escolar = $aluno->ano_escolar;
            $this->senha = $aluno->senha;

            $this->dispatch('openEditModal');
        }
    }
}
