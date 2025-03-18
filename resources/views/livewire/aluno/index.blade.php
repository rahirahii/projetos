<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Aluno</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>rm</th>
                        <th>Série</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aluno as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nome }}</td>
                            <td>{{ $t->email_educacional }}</td>
                            <td>{{ $t->rm }}</td>
                            <td>{{ $t->ano_escolar }}</td>
                            
                            <td>
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                                    wire:click="abrirModalVizualizar({{ $t->id }})">Visualizar</button>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                    wire:click="abrirModalEdicao({{ $t->id }})">Editar</button>

                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    wire:click="abrirModalExclusao({{ $t->id }})">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <livewire:aluno.edit>


        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir esse Aluno?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" wire:click="excluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>Email:</strong>{{ $email_educacional }}
                    </p>
                    <p><strong>RM:</strong>{{ $rm }}</p>
                    <p><strong>Série:</strong>{{ $ano_escolar }}</p>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
