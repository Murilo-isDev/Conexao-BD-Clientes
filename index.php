<?php
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <a href="adicionar.php" class="btn btn-success">Adicionar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Denis</td>
                    <td>denislima@iftm.edu.br</td>
                    <td>
                        <a href="editar.php?id=?" class="btn btn-sm btn-warning">Editar</a>
                        <a href="excluir.phpid=?" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Maria</td>
                    <td>maria@gmail.com</td>
                    <td>
                        <a href="editar.php?id=?" class="btn btn-sm btn-warning">Editar</a>
                        <a href="excluir.phpid=?" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Luiz</td>
                    <td>luiz@gmail.com</td>
                    <td>
                        <a href="editar.php?id=?" class="btn btn-sm btn-warning">Editar</a>
                        <a href="excluir.phpid=?" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap - CSS -->
    <script src="js/bootstrap.js"></script>
</body>

</html>