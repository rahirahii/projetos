<div class="mt-5">

    <div class="card">
        <h5 class="card-header">Cadastro de Alunos</h5>
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
                                            <label for="email_educacional" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email_educacional"
                                                name="email_educacional" placeholder="Email Educacional"
                                                wire:model.defer="email_educacional">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ano_escolar" class="form-label">Série .</label>
                                            <input type="text" class="form-control" id="ano_escolar"
                                                name="ano_escolar" placeholder="EX.:1° EM"
                                                wire:model.defer="ano_escolar">
                                        </div>
                                        <div class="mb-3">
                                            <label for="rm" class="form-label">RM .</label>
                                            <input type="integer" class="form-control" id="rm" name="rm"
                                                placeholder="0000" wire:model.defer="rm">
                                        </div>
                                        <div class="mb-3">
                                            <label for="senha" class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha"
                                                placeholder="xx00XX" wire:model.defer="senha">
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
