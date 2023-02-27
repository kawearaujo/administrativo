$(document).ready(function() {

    const token = sessionStorage.getItem('session');
    if (!token) {
        window.location = 'index.php'
    } else {
        var nome = JSON.parse(atob(token.split('.')[1])).name;
        $("#session_name").append("Bem vindo(a), ", nome, "!");
    }
    const intervalId = setInterval(verificaSessao, 1000 * 10); // chama a função a cada minuto
    $('#modalEditarUsuario').display = 'none';
    $('.alert').addClass('d-none');
    var table = $('#tableUsuarios').DataTable({

        ajax: {
            method: 'POST',
            url: 'http://localhost/admin_api/',
            data: {},
            dataSrc: ''
        },
        info: false,
        columnDefs: [{
                width: '5%',
                targets: [0]
            },
            {
                width: '30%',
                targets: [1]
            }
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
    $('#tableUsuarios_length').css('opacity', 0);

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
    $('.logout').click(function() {
        sessionStorage.removeItem('session');
        window.location = 'index.php';
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


function verificaSessao() {
    const token = sessionStorage.getItem('session');
    if (token) {
        const exp = JSON.parse(atob(token.split('.')[1])).exp;
        const expDate = new Date(exp * 1000);
        const currentDate = new Date();
        if (currentDate > expDate) {
            console.log('Sessão expirou!');
            sessionStorage.removeItem('session');
            window.location = 'index.php'
            // clearInterval(intervalId);

        }
    } else {
        window.location = 'index.php'
    }
}