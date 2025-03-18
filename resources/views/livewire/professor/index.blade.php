<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Professor</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>NIF</th>
                        <th>Matéria Dominante</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professor as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nome }}</td>
                            <td>{{ $t->email }}</td>
                            <td>{{ $t->nif }}</td>
                            <td>{{ $t->materia_dominante }}</td>
                            
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
            <livewire:professor.edit>
            


        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Professor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir esse Professor?</p>
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
                    <h5 class="modal-title">Detalhes do Professor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>Email:</strong>{{ $email }}
                    </p>
                    <p><strong>NIF:</strong>{{ $nif }}</p>
                    <p><strong>Matéria Dominante:</strong>{{ $materia_dominante }}</p>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
