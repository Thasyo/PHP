# VARIÁVEIS E CONSTANTES

## DIFERENÇA

- Variáveis: O valor dentro dela pode variar no decorrer do código;
- Constantes: Depois de atribuido, o valor dentro dela NÃO pode variar no decorrer do código.

## DECLARAÇÃO DE VARIÁVEIS

```
$nome = "Thasyo";
$sobrenome = "Peres";

$nome = "Luana";

echo "Meu nome é $nome $sobrenome";

SAÍDA: Meu nome é Luana Peres
```
        
## DECLARAÇÃO DE CONSTANTES.

```
const CIDADE = "Campina Grande";

const CIDADE = "Bahia"; essa linha de código dá erro pois os valores de constantes não podem variar. 

echo "<br/>A cidade onde moro é " . CIDADE; // . -> é a forma de concatenar texto com variáveis/constantes.
```

## COISAS INTERESSANTES DE CONHECER 
         
- As variáveis e as Constantes ficam armazenadas na parte do servidor.
- Operação de atribuição -> "=". Exemplo: $nome = "Thasyo".

## REGRAS PARA NOMES IDENTIFICADORES
        
- Variáveis sempre começam com o símbolo $
- O segundo pode ser letra ou o símbolo _
- Aceita caracteres [a-z], [A-Z], [0-9] e [_]
- Aceita caracteres da tabela ASCII a paritr de 128
- Aceita caracteres acentuados como á, õ e ç
- A linguagem é case sensitive em relação aos nomes
- Nomes especiais (palavras reservadas) como $this, não podem ser usados.

## RECOMENDAÇÕES PARA DAR NOMES

- Tente dar nomes claros e de fácil identificação
- Evite nomes muito curtos ou muito longos
- Defina um padrão de nomeação e siga em todo projeto
- Para variáveis, dê preferência a letras minúsculas
- Para variáveis, dê preferências a letras maiúsculas
- Use camelCase para métodos e atributos
- Use SNAKE_CASE para nomear constantes