<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Exercício 05</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Exercício 06</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <label for="valor1" class="col-sm-2 col-form-label">Informe o valor 1: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor1" name="valor1">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="valor2" class="col-sm-2 col-form-label">Informe o valor 2: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="valor2" name="valor2">
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
    function maior_valor($v1, $v2){
        if ($v1 > $v2)
            return $v2;
        elseif ($v2 > $v1)
            return $v1;
        else
            return 0;
    }

    if($_POST) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $resultado = maior_valor($valor1, $valor2);

        if($resultado == 0){
            echo "Os valores são iguais";
        }else{
            echo "O menor valor é $resultado";
        }
    }

    ?>
</div>
</html>