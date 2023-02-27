<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma</title>
    <link rel="icon"
        href="https://centralsigma.com.br/wp-content/uploads/2021/03/cropped-Logo-SIGMA-b0ff08a9-1-1-32x32.png"
        sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-bg-4 col-md-4 col-sm-8">
                <!-- Formulário de Login -->
                <div class="card" id="card-login">
                    <div class="card-header bg-dark text-light">
                        <h5 class="card-title text-center">Login</h5>
                    </div>
                    <div class="card-body">
                        <form id="form">
                            <div class="mb-3">
                                <label for="email" class="form-label">Endereço de Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite seu e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha"
                                    placeholder="Digite sua senha">
                            </div>
                            <button type="submit" class="btn btn-primary" id="login">Entrar</button>
                            <a href="#" class="btn btn-link" id="link-criar-conta">Criar uma conta</a>
                        </form>
                    </div>
                </div>

                <div class="card" id="card-cadastro">
                    <div class="card-header bg-dark text-light">
                        <h5 class="card-title text-center">Criar Conta</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome_cadastro" name="nome_cadastro"
                                    placeholder="Digite seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="email_cadastro" class="form-label">Endereço de Email</label>
                                <input type="email" class="form-control" id="email_cadastro" name="email_cadastro"
                                    placeholder="Digite seu e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="senha_cadastro" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha_cadastro" name="senha_cadastro"
                                    placeholder="Digite sua senha">
                            </div>
                            <button type="submit" class="btn btn-primary" id="criar_conta">Criar Conta</button>
                            <a href="#" class="btn btn-link" id="link-login-conta">Ja tenho uma conta</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="position-fixed top-0 end-0 " style="width: auto; z-index: 9999; opacity: 0.8;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email ou Senha inválido!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>