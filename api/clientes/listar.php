<center>
    <h1>Clientes</h1>

    <table border="4">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>CPF</td>
        </tr>
        <?php
        require("../connection.php");

        $dados_select = mysqli_query($conn, "SELECT ID, NOME, CPF FROM CLIENTES");

        while ($dado = mysqli_fetch_array($dados_select)) {
            echo '<tr>';
            echo '<td>' . $dado[0] . '</td>';
            echo '<td>' . $dado[1] . '</td>';
            echo '<td>' . $dado[2] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br />
    <a href="index.html"><input type="button" value="Voltar"></a>
</center>