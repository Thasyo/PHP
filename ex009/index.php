<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <ul>
        <li>+ -> Operador de Adição</li>
        <li>. -> Operador de Concatenação</li>
        <li>- -> Operador de Subtração</li>
        <li>* -> Operador de Multiplicação</li>
        <li>/ -> Operador de Divisão</li>
        <li>% -> Operador de Módulo (resto da divisão)</li>
        <li>** -> Operador de Potência</li>
    </ul>
    <h2>Exemplo</h2>
    <?php 
        $rPlus = "2" + "2";
        $rPoint = "2" . "2";
        $rSub = 2 - 2;
        $rMult = 2 * 2;
        $rDiv = 2 / 2;
        $rMod = 2 % 2;
        $rPot = 2 ** 2;
        echo "<p>'2' + '2' : $rPlus</p>";
        echo "<p>'2' . '2' : $rPoint</p>";
        echo "<p>'2' - '2' : $rSub</p>";
        echo "<p>'2' * '2' : $rMult</p>";
        echo "<p>'2' / '2' : $rDiv</p>";
        echo "<p>'2' % '2' : $rMod</p>";
        echo "<p>'2' ** '2' : $rPot</p>";
    ?>
</body>
</html>