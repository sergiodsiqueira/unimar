<?php
require("connection.php");

if (isset($_POST['codigo'])) {
    
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $cpf =  $_POST['cpf'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $sql = "UPDATE 
                clientes 
            SET 
                nome = '$nome', 
                cpf = '$cpf', 
                logradouro = '$logradouro', 
                bairro = '$bairro', 
                cidade = '$cidade', 
                uf = '$uf', 
                email = '$email', 
                telefone = '$telefone', 
                celular = '$celular'
            WHERE 
                id = $codigo";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript' type='text/javascript'>
                window.location.href='/projeto/clientes.php';
              </script>";
        die();
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Erro ao alterar o cliente');
                window.location.href='/projeto/clientes.php';
             </script>";
    }
} else {
    echo "<script language='javascript' type='text/javascript'>
                alert('Cliente não definido');
                window.location.href='/projeto/clientes.php';
             </script>";
}
