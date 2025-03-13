<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Index extends Component
{
    public $professorId;
    public $nome;
    public $email;
    public $nif;
    public $materia_dominante;
    

    protected $listeners = [
        'abrirModalEdicao',
        'projetoAtualizar' => "render",
        'professorAtualizado'=>"render"
    ];

    public function render()
    {
        $professor = Professor::all();
        return view('livewire.professor.index', compact('professor'));
        
    }

    public function abrirModalVizualizar($professorId)
    {
        $professor = Professor::find($professorId);
        if ($professor) {
            $this->nome = $professor->nome;
            $this->email = $professor->email;
            $this->nif = $professor->nif;
            $this->materia_dominante = $professor->materia_dominante;
            
        }
    }

    public function abrirModalExclusao($professorId)
    {
        $this->professorId = $professorId;
    }

    public function abrirModalEdicao($professorId)
    {
        $this->dispatch('editarProfessor', professorId: $professorId);
    }

    public function excluir()
    {
        if ($this->professorId) {
            Professor::find($this->professorId)->delete();
        }
    }
}

