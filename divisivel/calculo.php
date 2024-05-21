<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Divisivel</title>
</head>
<body>
    <form action="" method="get">
        <h1>Numero divisivel por 10, por 5, por 2</h1>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="floatingInput" placeholder="Número">
            <label for="floatingInput">Insira um Número</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Verificar">
    </form>

    <?php
    if (isset($_GET["floatingInput"]) && !empty($_GET["floatingInput"])) {
        $n = filter_var($_GET["floatingInput"], FILTER_VALIDATE_INT);
        if ($n !== false) {
            $result = array();
            if ($n % 10 == 0) {
                $result[] = "O número é divisível por 10";
            } else {
                $result[] = "O número não é divisível por 10";
            }
            if ($n % 5 == 0) {
                $result[] = "O número é divisível por 5";
            } else {
                $result[] = "O número não é divisível por 5";
            }
            if ($n % 2 == 0) {
                $result[] = "O número é divisível por 2";
            } else {
                $result[] = "O número não é divisível por 2";
            }
            echo "<h2>Resultados:</h2>";
            foreach ($result as $msg) {
                echo "<p>$msg</p>";
            }
        } else {
            echo "<p>Valor inválido</p>";
        }
    } else {
        echo "<p>Favor insira um valor</p>";
    }
    ?>
</body>
</html>