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
                    <input id="zipCode" class="input100" type="text" placeholder="CEP">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="description" class="input100" type="text" placeholder="Descrição">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="street" class="input100" type="tel" placeholder="Rua">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-road"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="number" class="input100" type="text" placeholder="Número">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-sort-numeric-desc"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="complement" class="input100" type="text" placeholder="Complemento">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-road"></i>
                    </span>
                </div>


                <div class="wrap-input100 validate-input m-b-10">
                    <input id="phoneNumber" class="input100" type="tel" placeholder="Telefone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-mobile-phone"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="neighborhood" class="input100" type="tel" placeholder="Bairro">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-road"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="city" class="input100" type="tel" placeholder="Cidade">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-sort-numeric-desc"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <select id="country" class="input100" name="Country">
                        <option value="Brasil">Brasil</option>
                    </select>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input id="reference" class="input100" type="tel" placeholder="Referência">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-road"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <select id="state" class="input100" name="State">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>

                <div class="container-login-layout-btn p-t-10">
                    <button id='adddados' onclick="addadress()" class="login-layout-btn">Adicionar Dados</button>
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
    <script src="../scripts/login/adressadd.js"></script>

</body>

<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>