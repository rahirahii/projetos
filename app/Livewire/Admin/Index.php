<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class Index extends Component
{
    public $adminId;
    public $nome;
    public $email;
   
    

    protected $listeners = [
        'abrirModalEdicao',
        'projetoAtualizar' => 'render',
        'adminAtualizado' => 'render'
    ];

    public function render()
    {
        $admin = Admin::all();
        return view('livewire.admin.index', compact('admin'));
    }

    public function abrirModalVizualizar($adminId)
    {
        $admin = Admin::find($adminId);
        if ($admin) {
            $this->nome = $admin->nome;
            $this->email = $admin->email;
           
            
        }
    }

    public function abrirModalExclusao($adminId)
    {
        $this->adminId = $adminId;
    }

    public function abrirModalEdicao($adminId)
    {
        $this->dispatch('editarAdmin', adminId: $adminId);
    }

    public function excluir()
    {
        if ($this->adminId) {
            Admin::find($this->adminId)->delete();
        }
    }
    
}
