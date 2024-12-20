<?php require './api/validar.php'; ?>

<?php include_once 'menu.php'; ?>
<?php
    require("./api/connection.php");

    $codigo = $_GET['codigo'];

    $result = mysqli_query($conn, "SELECT * FROM CLIENTES WHERE ID = $codigo");
    $dados = mysqli_fetch_array($result);
?>

<main class="p-3">
    <div class="container-fluid">
        <!-- Content -->

        <div class="row">
            <div class="col-xl-8 offset-xl-2 py-5">
                <h4>Cadastro de Clientes</h4>
                <br>
                <form id="contact-form" method="POST" action="./api/cliente_update.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <input type="codigo" class="form-control" name="codigo" id="codigo" value="<?php echo $dados[0] ?>" readonly>
                                    <label for="codigo" class="form-label">Código</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-floating mb-3">
                                    <input type="nome" class="form-control" name="nome" id="nome" value="<?php echo $dados[1] ?>" required>
                                    <label for="nome" class="form-label">Nome Completo</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="cpf" class="form-control" name="cpf" id="cpf" value="<?php echo $dados[2] ?>" required>
                                    <label for="cpf" class="form-label">CPF</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-floating mb-3">
                                    <input type="logradouro" class="form-control" name="logradouro" id="logradouro" value="<?php echo $dados[3] ?>">
                                    <label for="logradouro" class="form-label">Logradouro</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating mb-3">
                                    <input type="bairro" class="form-control" name="bairro" id="bairro" value="<?php echo $dados[4] ?>">
                                    <label for="bairro" class="form-label">Bairro</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-floating mb-3">
                                    <input type="cidade" class="form-control" name="cidade" id="cidade" value="<?php echo $dados[5] ?>">
                                    <label for="cidade" class="form-label">Cidade</label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-floating mb-3">
                                    <input type="uf" class="form-control" name="uf" id="uf" value="<?php echo $dados[6] ?>">
                                    <label for="uf" class="form-label">UF</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $dados[7] ?>" required>
                                    <label for="email" class="form-label">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="telefone" class="form-control" name="telefone" id="telefone" value="<?php echo $dados[8] ?>">
                                    <label for="telefone" class="form-label">Telefone</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="celular" class="form-control" name="celular" id="celular" value="<?php echo $dados[9] ?>">
                                    <label for="celular" class="form-label">Celular</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit" value="cadastrar" id="cadastrar">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- End Content -->
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