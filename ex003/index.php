<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <?php 
        /* 
            Diferença entre variáveis e constantes

            - Variáveis: O valor dentro dela pode variar no decorrer do código.
            - Constantes: Depois de atribuido, o valor dentro dela NÃO pode variar no decorrer do código.
        
        */

        // Declaração de variáveis.
        $nome = "Thasyo";
        $sobrenome = "Peres";

        $nome = "Luana";

        echo "Meu nome é $nome $sobrenome";

        // Declaração de constantes.
        const CIDADE = "Campina Grande";

        //const CIDADE = "Bahia"; essa linha de código dá erro pois os valores de constantes não podem variar. 

        echo "<br/>A cidade onde moro é " . CIDADE; // . -> é a forma de concatenar texto com variáveis/constantes.

        /* COISAS INTERESSANTES DE CONHECER 
         
            As variáveis e as Constantes ficam armazenadas na parte do servidor.
            Operação de atribuição -> "=". Exemplo: $nome = "Thasyo".

        */

        /* REGRAS PARA NOMES IDENTIFICADORES
        
        01 - Variáveis sempre começam com o símbolo $
        02 - O segundo pode ser letra ou o símbolo _
        03 - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
        04 - Aceita caracteres da tabela ASCII a paritr de 128
        05 - Aceita caracteres acentuados como á, õ e ç
        06 - A linguagem é case sensitive em relação aos nomes
        07 - Nomes especiais (palavras reservadas) como $this, não podem ser usados.
        
        */

        /* RECOMENDAÇÕES PARA DAR NOMES

        01 - Tente dar nomes claros e de fácil identificação
        02 - Evite nomes muito curtos ou muito longos
        03 - Defina um padrão de nomeação e siga em todo projeto
        04 - Para variáveis, dê preferência a letras minúsculas
        05 - Para variáveis, dê preferências a letras maiúsculas
        06 - Use camelCase para métodos e atributos
        07 - Use SNAKE_CASE para nomear constantes
        
        */

    ?>
</body>
</html>