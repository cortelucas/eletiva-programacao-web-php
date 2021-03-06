<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Exercício 03</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Exercício 03</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <?php
            session_start();

            if ($_SESSION['soma-cheques'] && $_SESSION['numero-cheques']){
                $somaCheques = $_SESSION['soma-cheques'];
                $numeroCheques = $_SESSION['numero-cheques'];
                $valorTotal = 0;

                for ($i=0 ;$i < $numeroCheques; $i++ ){ ?>
                    <label for="time" class="col-sm-2 col-form-label">Insira o valor do cheque: <?= $i+1 ?>: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="time" name="valores[]">
                    </div>
                <?php
                    $arrayCheques = $_POST['valores'];

                    for ($i = 0; $i < count($arrayCheques); $i++) {
                        $valorTotal += $arrayCheques[$i];
                    }
                    echo $valorTotal;
                    if (!empty($_POST)) {

                        if ($somaCheques == $valorTotal) {
                            echo "Valor previamente informado {$somaCheques} e o valor inserido {$valorTotal}, Lote OK!";
                        } elseif ($somaCheques > $valorTotal) {
                            echo "Valor previamente informado {$somaCheques} e o valor inserido {$valorTotal}, Diferença Negativa!";
                        } else {
                            echo "Valor previamente informado {$somaCheques} e o valor inserido {$valorTotal}, Diferença Positiva!";
                        }
                    }

                }
                session_destroy();


            }?>
        </div>
        <input class="btn btn-outline-main mt-2" type="submit" value="Enviar">
    </form>
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