<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
        /* $nome = "Thasyo";
        echo "Olá, $nome"; //Interpreta o que está dentro da string.
        echo '<br/>Olá, $nome'; //Só transmite o conteúdo dentro das aspas. */

        /* const ESTADO = "PB";
        echo "Moro na ESTADO";
        echo '<br/>Moro na ESTADO';
        echo "<br/>Moro na ". ESTADO; // esse '.' concatena informações. */

        /* $nome = "Rodrigo";
        $sobrenome = "Nogueira";

        echo "$nome \"Minotauro\" $sobrenome"; // o "\" é chamado de sequência de escape. */

        /* SEQUÊNCIAS DE ESCAPE 

        - \n: Nova Linha;
        - \t: Tabulação horizontal;
        - \\: Barra invertida;
        - \$: Sinal de cifrão;
        - \u{}: Codepoint Unicode;

        */

        /* $nome = "Thasyo";
        $sobrenome = "Peres";
        $apelido = "Feijão";

        echo "$nome \"$apelido\" $sobrenome"; */

        /* SINTAXE HEREDOC
            
        - Estrutura:

            $curso = "PHP";
            $ano = date('Y);
            echo <<< FRASE
                Estou estudando
                    $curso em $ano

                FRASE;
        */

        /* EXEMPLO (HEREDOC) 
        $nome = "Luana";
        $date = date('Y');

        echo <<< phrase

            Vou casar com $nome

                data: $date

            phrase; */

        /* SINTAXE NOWDOC: Estão para aspas duplas (intepretar texto dentro da string)

        - Estrutura:

            $curso = "PHP";
            $ano = date('Y);
            echo <<< FRASE
                Estou estudando
                    $curso em $ano

                FRASE;
        
        */

        /* EXEMPLO (NOWDOC): Estão para aspas simples (não interpreta o conteúdo da string)
        $nome = "Luana";
        $date = date('Y');

        echo <<< 'phrase'

            Vou casar com $nome

                data: $date

            phrase; 
        */
    ?>
</body>
</html>