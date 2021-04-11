<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inserir Impressora Laser</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Inserir dados de Impressora Laser</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <label for="modelo" class="col-sm-2 col-form-label">Modelo: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="modelo" name="modelo">
            </div>
        </div><div class="form-group row mt-2">
            <label for="capacidadeToner" class="col-sm-2 col-form-label">Capacidade do Toner: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="capacidadeToner" name="capacidadeToner">
            </div>
        </div><div class="form-group row mt-2">
            <label for="colorida" class="col-sm-2 col-form-label">Colorida: </label>
            <div class="col-sm-10">
                <select class="form-control" id="colorida" name="colorida">
                    <option value="SIM">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div><div class="form-group row mt-2">
            <label for="marca" class="col-sm-2 col-form-label">Marca: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="marca" name="marca">
            </div>
        </div><div class="form-group row mt-2">
            <label for="peso" class="col-sm-2 col-form-label">Peso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="peso" name="peso">
            </div>
        </div><div class="form-group row mt-2">
            <label for="frenteVerso" class="col-sm-2 col-form-label">Frente e Verso? </label>
            <div class="col-sm-10">
                <select class="form-control" id="frenteVerso" name="frenteVerso">
                    <option value="SIM">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        <input class="btn btn-outline-main mt-2" type="submit" value="Enviar">
    </form>
    <div class="container mt-5">
        <?php
            if($_POST) {
                require "ImpressoraLaser.php";

                $obj = new \Projeto\ImpressoraLaser(
                        $_POST['modelo'], $_POST['capacidadeToner'],
                        $_POST['colorida'], $_POST['marca'],
                        $_POST['peso'], $_POST['frenteVerso']
                );

                var_dump($obj);
            }
        ?>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>