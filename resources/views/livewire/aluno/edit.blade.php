<div class="mt-5">
    @if (session()->has('success'))
        <!-- abre o if--> <!--esse if serve para emitir esse alerta caso dê sucesso -->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif <!-- fecha o if-->

    <div class="card">
        <div class="card-header">Editar Aluno</div>
        <div class="card-body">
            <form wire:submit.prevent="salvar">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model.defer="email_educacional">
                </div>
                <div class="mb-3">
                    <label class="form-label">RM</label>
                    <input type="integer" class="form-control" wire:model.defer="rm">
                </div>
                <div class="mb-3">
                    <label for="ano_escolar" class="serie">Série Escolar</label>
                    <select class="form-select" aria-label="Default select example" wire:model.defer="ano_escolar">
                        <option selected>Escolha uma opção</option>
                        <option value="1° EF">1° ano EF</option>
                        <option value="2° EF">2° ano EF</option>
                        <option value="3° EF">3° ano EF</option>
                        <option value="4° EF">4° ano EF</option>
                        <option value="5° EF">5° ano EF</option>
                        <option value="6° EF">6° ano EF</option>
                        <option value="7° EF">7° ano EF</option>
                        <option value="8° EF">8° ano EF</option>
                        <option value="9° EF">9° ano EF</option>
                        <option value="1° EM">1° ano EM</option>
                        <option value="2° EM">2° ano EM</option>
                        <option value="3° EM">3° ano EM</option>

                    </select>
                </div>
            </form>
        </div>
        <div class="mt-3">
            <a href="{{route('aluno.dashboard')}}" class="btn btn-secondary">Cancelar</a>
            <button type="button" class="btn btn-primary" wire:click="salvar">Salvar</button>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('fecharModalEdicao', function() {
                var modal = document.getElementById('editModal');
                var modalInstance = bootstrap.Modal.getInstance(modal);

                if (modalInstance) {
                    modalInstance.hide();
                } else {
                    var newModal = new bootstrap.Modal(modal);
                    newModal.hide();
                }

                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                document.body.classList.remove('modal-open');
            });
        });
    </script>

</div>
