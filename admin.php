<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sigma</title>
    <link rel="icon"
        href="https://centralsigma.com.br/wp-content/uploads/2021/03/cropped-Logo-SIGMA-b0ff08a9-1-1-32x32.png"
        sizes="32x32">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/admin.css" type="text/css">
</head>


<body>

    <div class="container-fluid">
        <div class="">

        </div>
        <div class="row">
            <div class="col-md-2 bg-dark text-light d-flex flex-column justify-content-between" id="sidebar">
                <div>

                    <div class="d-block mb-3">
                        <div class="mt-3 mb-1" style="scale:2">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <span id="session_name"></span>
                    </div>
                    <a href="#" style="text-decoration:none !important; color:white;" id="btnHome">
                        <div class="d-block w-100 pt-2 pb-2 mt-2" style="background-color:#3e4042">
                            Dashboard
                        </div>
                    </a>
                    <a href="#" style="text-decoration:none !important; color:white;">
                        <div class="d-block w-100 pt-2 pb-2 mt-2 logout" style="background-color:#3e4042">
                            Sair
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-md-10 ps-0 pe-0">
                <div class="d-flex w-100 pt-1 ps-3 pe-3 header justify-content-between">
                    <h2 class="text-light ps-3">
                        <img style="height: 40px;"
                            src="https://centralsigma.com.br/wp-content/uploads/2021/08/5179pia_de_logo_sigma_letra_preta_2_.svg"
                            alt="SIGMA">
                        SIGMA
                    </h2>
                    <div class="d-flex justify-content-center pe-3" style="align-items: center;weight: 40px;scale: 2;">
                        <a href=" #" class="logout"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>
                <div class="tableBox">
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h2>Dashboard</h2>
                        </div>
                        <div class="d-flex center mb-3">
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
    </div>
    <?php require 'modals/modals_admin.php'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="js/admin.js">

    </script>
</body>

</html>