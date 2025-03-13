<div>
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true" wire:listener="hideModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" wire:model="nome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" wire:model="email_educacional">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">RM</label>
                        <input type="integer" class="form-control" wire:model="rm">
                    </div>
                    <div class="mb-3">
                        <label for="ano_escolar" class="serie">Série Escolar</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="ano_escolar">
                            <option selected >Escolha uma opção</option>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" wire:click="salvar">Salvar</button>
                </div>
            </div>
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
