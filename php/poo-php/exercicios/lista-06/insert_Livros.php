<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Inserir DVD's</title>

</head>
<body>
<header class="card-header bg-white text-center">
    <h1>Inserir dados do DVD</h1>
</header>
<section class="container card shadow-lg mt-5 p-5">

    <form method="post">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="name" class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="dateOfAcquisiton" class="col-sm-2 col-form-label">Data de aquisição: </label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dateOfAcquisiton" name="dateOfAcquisiton">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="listOfAuthors" class="col-sm-2 col-form-label">Autores: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="listOfAuthors" name="listOfAuthors">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="publisherName" class="col-sm-2 col-form-label">Nome da Editora: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisherName" name="publisherName">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="yearOfPubication" class="col-sm-2 col-form-label">Ano da publicação: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="yearOfPubication" name="yearOfPubication">
            </div>
        </div>

        <input class="btn btn-outline-main mt-2" type="submit" value="Enviar">
    </form>
    <div class="container mt-5">
        <?php
        if ($_POST) {
            require "ClasseLivros.php";

            $obj = new \EmpresaXYZ\ClasseLivros(
                $_POST['id'], $_POST['name'], $_POST['dateOfAcquisition'],
                $_POST['listOfAuthors'], $_POST['publisherName'], $_POST['yearOfPubication']
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