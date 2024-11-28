<?php
    require("connection.php");

    $nome = $_POST['nome'];
    $cpf =  $_POST['cpf'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $sql = "INSERT INTO clientes (nome, cpf, logradouro, bairro, cidade, uf, email, telefone, celular)
    VALUES ('$nome', '$cpf', '$logradouro', '$bairro', '$cidade', '$uf', '$email', '$telefone', '$celular')";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript' type='text/javascript'>
                window.location.href='/projeto/clientes.php';
              </script>";
        die();
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Erro ao cadastrar o cliente');
                window.location.href='/projeto/clientes.php';
             </script>";      
    }
?>