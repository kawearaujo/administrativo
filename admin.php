<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Página Administrativa</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
html,
body {
    height: 100%;
    margin: 0;
}

#sidebar {
    height: 100vh;
    width: 20vw;
}

@media (max-width: 992px) {
    #sidebar {
        position: static;
        height: auto;
        /* width: 20vw; */
    }
}
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark text-light " id="sidebar">
                <h2>Empresa X</h2>
                <button class="btn btn-primary btn-block" id="btnHome">Home</button>
            </div>
            <div class="col-md-9 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Lista de Usuários</h2>
                    </div>
                    <div>
                        <button class="btn btn-primary" id="btnCriarModal">Adicionar Novo Usuário<i
                                class="ps-2 bi bi-person-add"></i></button>
                    </div>
                </div>

                <table class="table table-striped table-bordered" id="tableUsuarios">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- aqui serão inseridos os dados do DataTable -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
                    <button type="submit" class="btn btn-primary" id="btnCriarUsuario"
                        data-toggle="modal">Criar</button>
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
    <div class="position-fixed top-0 end-0" style="width: 400px; z-index: 9999; opacity: 0.8;">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            A modificação ocorreu corretamente!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        id="btnCancelar">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="btnSalvar">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal confirmar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#modalEditarUsuario').display = 'none';
        $('.alert').addClass('d-none');
        var table = $('#tableUsuarios').DataTable({
            ajax: {
                method: 'POST',
                url: 'http://localhost/admin_api/',
                data: {},
                dataSrc: ''
            },
            columnDefs: [{
                    width: '5%',
                    targets: [0]
                },
                {
                    width: '30%',
                    targets: [1]
                },
            ],
            columns: [{
                    data: function(data, type, row, meta) {
                        return data.id;
                    }
                },
                {
                    data: function(data, type, row, meta) {
                        return data.name;
                    }
                },
                {
                    data: function(data, type, row, meta) {
                        return data.email;
                    }
                },
                {
                    data: function(data, type, row, meta) {
                        return `<button style="margin-right:4px" class="btn btn-primary" data-id="${data.id}" onclick="editar(this)"><i class="bi bi-tools"></i></button>` +
                            `<button class="btn btn-danger" data-id="${data.id}" onclick="deletar(this)"><i class="bi bi-trash"></i></button>`;
                    }
                }
            ]
        });
        $('#btnCriarModal').click(function() {
            $('#nome_novo').val('');
            $('#email_novo').val('');
            $('#senha_novo').val('');
            $('#modalCriarUsuario').modal('show');
        })
        $('#submit').click(function() {
            // $('#modalEditarUsuario').css('z-index', 0);
            $('#modalEditarUsuario').modal('hide');
            $('#confirmarModal').modal('show');
        })
        $('#btnCriarUsuario').click(function() {
            var name = $("#nome_novo").val();
            var email = $("#email_novo").val();
            var password = $("#senha_novo").val();
            if (!name || !email || !password) {} else {
                $('#modalCriarUsuario').modal('hide');
                criar()
            }
        })
        $('#btnSalvar').click(function() {
            $('#confirmarModal').modal('hide');
            var id = $('#id').val()
            var nome = "";
            var senha = "";
            if ($('#nome_edit').val()) {
                nome = $('#nome_edit').val()
            }
            if ($('#senha_edit').val()) {
                senha = $('#senha_edit').val()
            }
            $.ajax({
                method: 'POST',
                url: 'http://localhost/admin_api/',
                contentType: 'application/json',
                data: JSON.stringify({
                    atualizar_id: id,
                    name: nome,
                    password: senha
                })
            })
            $('.alert').removeClass('d-none');
            $('.alert').removeClass('position-absolute');
            reload();
        })
        $('#btnCancelar').click(function() {
            $('#confirmarModal').modal('hide');
            $('#modalEditarUsuario').modal('show');
        })
        $('#btnCancelarDados').click(function() {
            $('#modalEditarUsuario').modal('hide');
        })
        $('.close').click(function() {
            $('#modalEditarUsuario').modal('hide');
            $('#confirmarModal').modal('hide');
            $('#modalCriarUsuario').modal('hide');
        })
        // evento do botão home
        $('#btnHome').click(function() {
            table.ajax.reload();
        });
    });

    function criar() {
        $.ajax({
            method: 'POST',
            url: 'http://localhost/admin_api/',
            contentType: 'application/json',
            data: JSON.stringify({
                criar: "true",
                name: $("#nome_novo").val(),
                email: $("#email_novo").val(),
                password: $("#senha_novo").val()
            }),
            success: function(data) {
                $('.alert').removeClass('d-none');
                $('.alert').removeClass('position-absolute');
                reload();
            }
        })
    }

    function deletar(usuario) {
        if (confirm("Realmente deseja excluir esse Usuário?")) {
            $.ajax({
                method: 'POST',
                url: 'http://localhost/admin_api/',
                contentType: 'application/json',
                data: JSON.stringify({
                    deletar_id: usuario.dataset.id
                })
            })
            reload();
        }
    }

    function editar(usuario) {
        var modal = $('#modalEditarUsuario');
        $.ajax({
            method: 'POST',
            url: 'http://localhost/admin_api/',
            contentType: 'application/json',
            data: JSON.stringify({
                buscar_id: usuario.dataset.id
            })
        }).done((res) => {
            $('#id').val(res[0].id);
            $('#nome_edit').val(res[0].name);
            $('#senha_edit').val('');
            $('#modalEditarUsuario').modal('show');
        })



        // $('#nomeUsuario').val()

    }

    function reload() {
        $('#tableUsuarios').DataTable().ajax.reload()
    }
    </script>
</body>

</html>