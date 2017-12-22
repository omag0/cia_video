<?php
$this->paginaTitulo = "Commit";
$this->layout('layout.topo');
session_start();
unset($_SESSION['logado_administrador_email']);
unset($_SESSION['logado_administrador_nome']);
unset($_SESSION['logado_cliente_email']);
unset($_SESSION['logado_cliente_nome']);
?>

    <div class="form-group col-md-6 col-md-offset-3" style="margin-top: 15%">
        <!-- Botao Cliente Modal -->


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target="#modalCliente">
            Cliente
        </button>

        <!-- Botao Administrador Modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-md-3 col-md-offset-1" data-toggle="modal" data-target="#modalAdministrador">
            Administrador
        </button>

    </div>

    <!-- Modal Cliente -->
    <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="modalClienteLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalClienteLabel   ">Logar como Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="login/cliente">
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                   placeholder="Digite seu email" name="email">
                            <small id="emailHelp" class="form-text text-muted">Não iremos fornecer seu email a
                                ninguém.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha"
                                   name="senha">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="margin-top: 2%;">
                                <input type="checkbox" class="form-check-input">
                                Mantenha-me logado
                            </label>
                        </div>
                        <div align="center" style="margin-top:2%">
                            <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Logar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>


    <!-- Modal Administrador-->
    <div class="modal fade" id="modalAdministrador" tabindex="-1" role="dialog" aria-labelledby="modalAdministradorLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAdmistradorLabel">Logar como Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="login/administrador">
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                   placeholder="Digite seu email" name="email">
                            <small id="emailHelp" class="form-text text-muted">Não iremos fornecer seu email a
                                ninguém.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha"
                                   name="senha">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="margin-top: 2%;">
                                <input type="checkbox" class="form-check-input">
                                Mantenha-me logado
                            </label>
                        </div>
                        <div align="center" style="margin-top:2%">
                            <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Logar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

<?php $this->layout('layout.rodape'); ?>