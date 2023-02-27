$(document).ready(function() {
    $('#senha').val('');
    $("#email").val('');
    $("#nome_cadastro").val('');
    $("#email_cadastro").val('');
    $("#senha_cadastro").val('');
    const token = sessionStorage.getItem('session');
    if (token) {
        window.location = 'admin.php'
    }
    $('.alert').addClass('d-none');
    const intervalId = setInterval(verificaSessao, 1000 * 10); // chama a função a cada minuto
    // $("#email").val('');
    // $("#senha").val('');
    // Manipulador de eventos para o link "Criar uma conta"
    $("#link-criar-conta").click(function(event) {
        event.preventDefault(); // previne o comportamento padrão do link
        $("#card-login").toggle(); // mostra ou esconde o formulário de login
        $("#card-cadastro").toggle(); // mostra ou esconde o formulário de cadastro
    });
    $("#link-login-conta").click(function(event) {
        event.preventDefault(); // previne o comportamento padrão do link
        $("#card-cadastro").toggle(); // mostra ou esconde o formulário de cadastro
        $("#card-login").toggle(); // mostra ou esconde o formulário de login

    });
    const form = document.querySelector('#form');
    form.addEventListener('submit', async function(event) {
        event.preventDefault();
        try {
            const logar = await $.ajax({
                url: 'http://localhost/admin_api/login.php',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    email: $("#email").val(),
                    password: $("#senha").val()
                }),
                success: function(data) {
                    if (data) {
                        sessionStorage.setItem('session', data);
                        window.location = 'admin.php';
                    } else {

                        $('.alert').removeClass('d-none');
                        $('.alert').css('opacity', '0.8')
                        $('.alert').removeClass('position-absolute');
                        var opacidade = 0.8;

                        const tempoAlert = setInterval(() => {
                            opacidade -= 0.1
                            $('.alert').css('opacity', opacidade)
                        }, 300);



                    }
                }
            });
        } catch (error) {
            console.log(error);
        }
    })
    
    $("#criar_conta").click(function(event) {
        event.preventDefault(); // previne o comportamento padrão do link

        $.ajax({
            url: 'http://localhost/admin_api/',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
                criar: "true",
                name: $("#nome_cadastro").val(),
                email: $("#email_cadastro").val(),
                password: $("#senha_cadastro").val()
            }),
            success: function(data) {
                window.location = 'admin.php'
            }
        })
    })
})

function verificaSessao() {
    const token = sessionStorage.getItem('session');
    if (token) {
        const exp = JSON.parse(atob(token.split('.')[1])).exp;
        const expDate = new Date(exp * 1000);
        const currentDate = new Date();
        if (currentDate > expDate) {
            console.log('Sessão expirou!');
            clearInterval(intervalId);
            sessionStorage.removeItem('session');
        }
    }
}