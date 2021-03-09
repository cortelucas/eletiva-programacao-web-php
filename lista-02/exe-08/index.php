<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Exercício 08</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Exercício 08</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <label for="valor1" class="col-sm-2 col-form-label">Informe o primero número: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor1" name="valor">
            </div>
        </div>

        <input class="btn btn-outline-info mt-2" type="submit" value="Enviar">
    </form>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>

<div class="container mt-2 text-center">
    <?php
    function parOuImpar($numero){
        if($numero % 2 == 0) {
            return 1;
        } else {
            return 0;
        }
    }
    if(!empty($_POST)) {
        $valor = $_POST['valor'];

        if(parOuImpar($valor) == 0) {
            echo "Número é Ímpar!";
        } elseif (parOuImpar($valor) == 1) {
            echo "Número é Par!";
        } else {
            echo "Error!";
        }
    }
    ?>
</div>
</html>