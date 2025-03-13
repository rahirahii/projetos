<div class="mt-5">
   
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <h5 class="card-header">Cadastro de Professor</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="bg-light py-3 py-md-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card border border-light-subtle rounded-3 shadow-sm">
                                    <div class="card-body p-3 p-md-4 p-xl-5">
                                        <div class="text-center mb-3">
                                            <a href="#!">
                                                <img src="img/smart.png" alt="smart logo" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome"
                                                placeholder="Nome Completo" wire:model.defer="nome">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                name="email" placeholder="Email"
                                                wire:model.defer="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="materia_dominante" class="form-label">Matéria Dominante</label>
                                            <select class="form-select" aria-label="Default select example" 
                                            wire:model.defer="materia_dominante">
                                            
                                                <option selected>Escolha uma opção</option>
                                                <option value="1">Matemática</option>
                                                <option value="2">Português</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rm" class="form-label">nif</label>
                                            <input type="integer" class="form-control" id="rm" name="rm"
                                                placeholder="0000" wire:model.defer="rm">
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="rememberMe" id="rememberMe">
                                            <label class="form-check-label text-secondary" for="rememberMe">Salvar
                                                Informações</label>
                                        </div>
                                        <a href="#!" class="link-primary text-decoration-none">Esqueceu sua
                                            senha?</a>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
