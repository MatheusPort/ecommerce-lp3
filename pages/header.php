<!-- Estilos gerais -->
<link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../styles/animation/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="../styles/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap-navbar.css">

<!-- Fontes e icones -->
<link rel="stylesheet" type="text/css" href="../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="../scripts/main.js"></script>

<header>
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Distribuidora Norden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="products.php">
                        <i class="fa fa-shopping-cart"></i>
                        Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/pg/NordenChopp/about/?ref=page_internal"
                        target="_blank">
                        <i class="fa fa-envelope-o"></i>
                        Contato
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-shopping-cart">
                            <span class="badge badge-info" id="cart-icon"></span>
                        </i>
                        Meu carrinho
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style='width:260px'>
                        <div id="itens-cart">
                        </div>
                        <button id='checkout-go' onclick="window.location.href='checkout.php'"   class="login-adress-layout-btn">Checkout</button>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='fa fa-user'></i>Minha Conta</a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a id='username' class='dropdown-item' href='login.php'>Fazer login</a>
                        <div id="usercontrol"></div>
                        <a id='registerlogout' class='dropdown-item' href='registro.php'>Registro</a>
                </li>
            </ul>
        </div>
    </nav>
</header>