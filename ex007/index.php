<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
</head>
<body>
    <h1>Expressões Aritméticas</h1>
    <h2>Ordem de precedência:</h2>
    <ul>
        <li>Parentêses: ()</li>
        <li>Potência: **</li>
        <li>Multiplicação: * | Divisão: / | Módulo: %</li>
        <li>Adição: + | Subtração: -</li>
    </ul>
    <h1>Exemplo:</h1>
    <?php 
        $resposta01 = 50 / 2 + 3 ** 2;
        echo "50 / 2 + 3 ** 2 = <strong>$resposta01</strong>";

        $resposta02 = 50 / (2 + 3) ** 2;
        echo "<br/>50 / (2 + 3) ** 2 = <strong>$resposta02</strong>";
    ?>
</body>
</html>