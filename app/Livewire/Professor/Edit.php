<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Edit extends Component
{
    public $professorId;
    public $nome;
    public $email;
    public $nif;
    public $materia_dominante;
    

    protected $listeners = [
        'editarProfessor',
        'closeEditModal' => "fecharModal"
    ];

    public function fecharModal()
    {
        $this->dispatch('hideModal');
    }

    public function salvar()
    {
        $professor = Professor::find($this->professorId);
        if ($professor) {
            $professor->update([
                'nome' => $this->nome,
                'email' => $this->email,
                'nif' => $this->nif,
                'materia_dominante' => $this->materia_dominante,
                
            ]);
        }

        $this->dispatch('porfessorAtualizado');
        $this->dispatch('fecharModalEdicao');
        session()->flash('message', 'professor Atualizado');
    }

    public function render()
    {
        return view('livewire.professor.edit');
    }

    public function editarProfessor($professorId)
    {
        $professor = Professor::find($professorId);
        if ($professor) {
            $this->professorId = $professor->id;
            $this->nome = $professor->nome;
            $this->email = $professor->email;
            $this->nif = $professor->nif;
            $this->materia_dominante = $professor->materia_dominante;
            

            $this->dispatch('openEditModal');
        }
    }
}

        