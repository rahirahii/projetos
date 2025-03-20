<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
       
            <h5 class="card-header" style="background-color: rbg(208, 239,255)">Cadastro de Alunos</h5>
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
                                                    <img src="img/smart.png" alt="smart logo" width="100"
                                                        height="100">
                                                </a>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nome" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="nome" name="nome"
                                                    placeholder="Nome Completo" wire:model.defer="nome">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email_educacional" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email_educacional"
                                                    name="email_educacional" placeholder="Email Educacional"
                                                    wire:model.defer="email_educacional">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ano_escolar" class="serie">Série Escolar</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    wire:model="ano_escolar">
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
                                            <div class="mb-3">
                                                <label for="rm" class="form-label">RM </label>
                                                <input type="integer" class="form-control" id="rm" name="rm"
                                                    placeholder="0000" wire:model.defer="rm">
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Senha </label>
                                                <input type="integer" class="form-control" id="password" name="password"
                                                    placeholder="Digite sua senha" wire:model.defer="password">
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
