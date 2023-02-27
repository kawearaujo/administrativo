<!-- Modal para Criar novo Usuario -->

<div class="modal" id="modalCriarUsuario" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar novo Usuário </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" value="" id="id">
                    <div class="form-group">
                        <label for="nome_novo">Nome:</label>
                        <input type="text" class="form-control" name="nome_novo" id="nome_novo" required>
                    </div>
                    <div class="form-group">
                        <label for="email_novo">Email:</label>
                        <input type="text" class="form-control" name="email_novo" id="email_novo" required>
                    </div>
                    <div class="form-group">
                        <label for="senha_novo">Senha:</label>
                        <input type="text" class="form-control" name="senha_novo" id="senha_novo" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    id="btnCancelarDados">Fechar</button>
                <button type="submit" class="btn btn-primary" id="btnCriarUsuario" data-toggle="modal">Criar</button>
            </div>
        </div>
    </div>
</div>

<!-- Fim do Modal -->

<!-- Modal para Editar os dados do Usuario -->

<div class="modal" id="modalEditarUsuario" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar dados do Usuário </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" value="" id="id">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome_edit" id="nome_edit">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="text" class="form-control" name="senha_edit" id="senha_edit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    id="btnCancelarDados">Fechar</button>
                <button type="button" class="btn btn-primary" id="submit" data-toggle="modal"
                    data-target="#confirmarModal">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fim do Modal -->

<!-- Modal confirmar modificação -->

<div class="modal fade" id="confirmarModal" tabindex="-1" role="dialog" aria-labelledby="confirmarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmarModalLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja realmente salvar as alterações?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancelar">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnSalvar">Salvar</button>
            </div>
        </div>
    </div>
</div>
<div class="position-fixed top-0 end-0" style="width: 400px; z-index: 9999; opacity: 0.8;">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        A modificação ocorreu corretamente!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<!-- Fim do Modal confirmar -->