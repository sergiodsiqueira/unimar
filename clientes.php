<?php include_once 'menu.php'; ?>

        <main class="p-3">
            <div class="container-fluid">
                <p>Listagem de Clientes</p>
                <center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require("./api/connection.php");

                            $dados_select = mysqli_query($conn, "SELECT ID, NOME, CPF FROM CLIENTES");

                            while ($dado = mysqli_fetch_array($dados_select)) {
                                echo '<tr>';
                                    echo '<th scope="row">' . $dado[0] . '</th>';
                                    echo '<td>' . $dado[1] . '</td>';
                                    echo '<td>' . $dado[2] . '</td>';

                                    echo '<td>';
                                    echo '<a href="#" class="btn btn-sm btn-warning">✏️</a> &ensp;';
                                    echo '<a href="#" class="btn btn-sm btn-danger" onclick="return confirm("Tem certeza que deseja excluir este cliente?")">🗑️</a>';
                                    echo '</td>';

                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            </div>
        </main>
    </div>
</div>

<script src="menu.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>