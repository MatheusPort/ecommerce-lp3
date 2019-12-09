<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Distribuidora Norden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../favicon.ico" />

    <!-- Estilos da página -->
    <link rel="stylesheet" type="text/css" href="../styles/login/util.css">
    <link rel="stylesheet" type="text/css" href="../styles/login/main.css">

    <!-- Scripts da página -->
    <script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

    <?php include ('header.php'); ?>
</head>

<div class="container">
    <select id="category" class="input100" name="cars" style="margin-top : 12px"></select>
    <div class="mt-3 mb-4" style="float: left; margin-left : 15px">
        <div id="products">
        </div>
    </div>
</div>

<script src="../scripts/login/popper/popper.js"></script>
<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
<script src="../scripts/login/select/select2.min.js"></script>
<script src="../scripts/login/main.js"></script>
<script src="../scripts/produtos.js"></script>
</body>
<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>