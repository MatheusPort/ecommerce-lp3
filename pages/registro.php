<!DOCTYPE html>
<html lang="en">

<head>

    <title>Distribuidora Norden - Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../favicon.ico" />

    <!-- Estilos gerais -->
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap-navbar.css">
    <link rel="stylesheet" type="text/css" href="../styles/animation/animate.css">
    <link rel="stylesheet" type="text/css" href="../styles/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">

    <!-- Fontes e icones -->
    <link rel="stylesheet" type="text/css" href="../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <!-- Estilos da página -->
    <link rel="stylesheet" type="text/css" href="../styles/login/util.css">
    <link rel="stylesheet" type="text/css" href="../styles/login/main.css">

    <script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

    <?php include ('header.php'); ?>
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('../images/img-01.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <div class="login-layout-avatar">
                    <img src="../images/avatar-01.jpg" alt="AVATAR">
                </div>

                <span class="login-layout-title p-t-20 p-b-45">
                    Registro
                </span>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="user" class="input100" type="text" name="username" placeholder="Usuário">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="email" class="input100" type="text" name="email" placeholder="E-mail">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="firstname" class="input100" type="text" name="firstname" placeholder="Nome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="secondname" class="input100" type="text" name="secondname" placeholder="Sobrenome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="cellphone" class="input100" type="tel" name="secondname" pattern="[0-9]{11}"
                        placeholder="DD + Telefone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-mobile-phone"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="cpf" class="input100" type="text" name="cpf" placeholder="CPF">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-file"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="rg" class="input100" type="text" name="rg" placeholder="RG">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-file"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="date" class="input100" type="date" name="date" placeholder="Data de nascimento">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-calendar"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <select id="genre" class="input100" name="cars">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="password" class="input100" type="password" name="pass" placeholder="Senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="passwordconfirm" class="input100" type="password" name="passcofnirm"
                        placeholder="Confirmar senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="container-login-layout-btn p-t-10">
                    <button class="login-layout-btn" type='submit' id='validateregister'>Realizar registro</button>

                </div>

                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="login.php" class="txt1">
                        Já possuí uma conta? fazer login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="../scripts/login/popper/popper.js"></script>
    <script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
    <script src="../scripts/login/select/select2.min.js"></script>
    <script src="../scripts/login/main.js"></script>
    <script src="../scripts/login/checklogin.js"></script>

</body>

<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>