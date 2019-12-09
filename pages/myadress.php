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
        <div class="buttom-add-adress">
            <button id='addadress' value="Submit" href="myadress-add.php"
                onclick="window.location.href='myadress-add.php'" class="login-adress-layout-btn">Adicionar
                endereço</button>
        </div>

        <div class="container-login100" style="background-image: url('../images/img-01.jpg');">
            <center>
                <div class="container">
                    <div id="founded-adress">
                    </div>
                </div>
        </div>
        	</center>
			
        <script src="../scripts/login/popper/popper.js"></script>
        <script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
        <script src="../scripts/login/select/select2.min.js"></script>
        <script src="../scripts/login/main.js"></script>
        <script src="../scripts/login/adress.js"></script>

</body>

<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>