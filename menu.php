<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <title>ERP Focus</title>
    
    <!-- Libs -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="menu.css" rel="stylesheet" />
    <link href="dashboard.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar-toggle">
            <div class="sidebar-logo">
                <img src="http://localhost/projeto/assets/img/logo_pb.png" class="logo-menu" alt="Logotipo Focus">
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav p-0">
                <li class="sidebar-header">
                    Modulos
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#comercial" aria-expanded="true" aria-controls="comercial">
                        <i class="fa-solid fa-coins"></i>
                        <span>Comercial</span>
                    </a>
                    <ul id="comercial" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/projeto/clientes.php" class="sidebar-link">Clientes</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/projeto/produtos.php" class="sidebar-link">Produtos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#vendas" aria-expanded="true" aria-controls="vendas">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Vendas</span>
                    </a>
                    <ul id="vendas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/projeto/pedidos.php" class="sidebar-link">Pedidos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/projeto/faturamento.php" class="sidebar-link">Faturamento</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    Widgets
                </li>
                <li class="sidebar-item">
                    <a href="/projeto/home.php" class="sidebar-link">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/projeto/configuracoes.php" class="sidebar-link">
                        <i class="fa-solid fa-sliders"></i>
                        <span>Configurações</span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Navigation Ends -->
            <div class="sidebar-footer">
                <a href="/projeto/api/logoff.php" class="sidebar-link">
                    <i class="fa-solid fa-power-off"></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>
        <!-- Sidebar Ends -->

        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand">
                <button class="toggler-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </nav>