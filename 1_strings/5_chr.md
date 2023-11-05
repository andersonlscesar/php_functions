# Função chr 


A função chr() em PHP é usada para obter o caractere correspondente a um valor ASCII específico. O chr() aceita um número inteiro (o valor ASCII) como argumento e retorna o caractere correspondente a esse valor.

Aqui está a assinatura da função chr():

~~~php
chr(int $ascii_value) : string
~~~

* $ascii_value: O valor ASCII do caractere desejado.

## Exemplo de uso da função chr():

~~~php 

$ascii_value = 65; // O valor ASCII para 'A'
$character = chr($ascii_value);

echo $character; // Resultado: 'A'

~~~