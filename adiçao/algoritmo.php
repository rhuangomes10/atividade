<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Adição</title>
</head>
<body>
    <h1>Adição</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        <label for="">Insira um número</label>
        <input type="text" class="input-group-text" name="n1" id="n1">
        <label for="">Insira outro número</label>
        <input type="text" class="input-group-text" name="n2" id="n2"><br>
        <input type="submit" id="btn" value="Calcular" class="btn btn-primary">

    </form>

    <?php
    if (isset($_GET['n1']) && isset($_GET['n2']) && is_numeric($_GET['n1']) && is_numeric($_GET['n2'])) {
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
    } else {
        echo "Por favor, insira seus números!";
        exit;
    }
    
    $soma = $n1 + $n2;
    
    echo "A soma entre $n1 e $n2 é igual a $soma";
    
    if ($soma > 20) {
        $soma = $soma + 8;
        echo"<br>";
        echo "O valor é maior que 20, então irei somar com mais 8, ficando assim $soma";
    } elseif ($soma <= 20) {
        $soma = $soma - 5;
        echo"<br>";
        echo "O valor é menor que 20, então irei subtrair 5, ficando assim $soma";
    }
    ?>
</body>
</html>