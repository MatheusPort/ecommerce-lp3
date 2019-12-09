<!DOCTYPE html>
<html lang="en">

<head>

    <title>Distribuidora Norden</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../favicon.ico" />

    <!-- Estilos da página -->
    <link rel="stylesheet" type="text/css" href="../styles/login/util.css">
    <link rel="stylesheet" type="text/css" href="../styles/login/main.css">

    <!-- Scripts da página -->
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

                <span id="goodnews" class="login-layout-title p-t-20 p-b-45"></span>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="firstName" class="input100" type="text" name="first_name" placeholder="Nome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="lastName" class="input100" type="text" name="last_name" placeholder="Sobrenome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="cellphone" class="input100" type="tel" name="cell" pattern="[0-9]{11}"
                        placeholder="DD + Telefone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-mobile-phone"></i>
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

                <div class="container-login-layout-btn p-t-10">
                    <button type='submit' id='attdados' value="Submit" class="login-layout-btn">Atualizar dados</button>
                </div>
                <div class="text-center w-full p-t-25 p-b-230"></div>
                <div class="text-center w-full"></div>
            </div>
        </div>
    </div>

    <script src="../scripts/login/popper/popper.js"></script>
    <script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
    <script src="../scripts/login/select/select2.min.js"></script>
    <script src="../scripts/login/main.js"></script>
    <script src="../scripts/login/myaccount.js"></script>

</body>

<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>