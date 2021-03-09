<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Exercício 10</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Exercício 10 - IMC</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <label for="altura" class="col-sm-2 col-form-label">Informe sua Altura: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="altura" name="altura" placeholder="Ex: 1.83">
            </div>
        </div>
        <div class="form-group row">
            <label for="peso" class="col-sm-2 col-form-label">Informe seu Peso: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="peso" name="peso">
            </div>
        </div>

        <input class="btn btn-outline-info mt-2" type="submit" value="Enviar">
    </form>
    <div class="container mt-2 card-body text-center">

        <?php
        function imc($altura, $peso){
            $altura = str_replace(',', '.', $altura);
            $resultado = ($peso / ($altura * $altura));
            return $resultado;
        }

        if(!empty($_POST)) {
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];

            if (imc($altura, $peso) <= 18.5)
                echo "Cuidado! Seu IMC é: ", imc($altura, $peso), "Você esta abaixo do peso!";
            elseif (imc($altura,$peso) >= 18.6 && imc($altura, $peso) <= 24.9)
                echo "Parabéns! Seu IMC é: ", imc($altura, $peso), "Você esta no peso ideal";
            elseif (imc($altura, $peso)>= 25.0 && imc($altura, $peso) <= 29.9)
                echo "Atenção! Seu IMC é: ", imc($altura, $peso), " Você está levemente acima do peso!";
            elseif (imc($altura, $peso)>= 30 && imc($altura, $peso) <= 34.9)
                echo "Atenção! Seu IMC é: ", imc($altura, $peso), " Você entrou no primeiro grau de obesidade!";
            elseif (imc($altura, $peso)>= 35.0 && imc($altura, $peso) <= 39.9)
                echo "Cuidado! Seu IMC é: ", imc($altura, $peso), " Você está no grau 2 de obesidade!";
            else
                echo "Sinto informa-lhe Seu IMC é: ", imc($altura, $peso), ", para o seu bem, procure um médico";
        }
        ?>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>


</html>