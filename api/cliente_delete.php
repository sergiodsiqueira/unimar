<?php
require("connection.php");

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    
    $sql = "DELETE FROM clientes WHERE id = $codigo";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript' type='text/javascript'>
                window.location.href='/projeto/clientes.php';
              </script>";
        die();
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Erro ao excluir o cliente');
                window.location.href='/projeto/clientes.php';
             </script>";      
        die();
    }  
}
?>