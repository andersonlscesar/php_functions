# Função chop 

A função chop() em PHP é um sinônimo da função rtrim(). Ambas as funções são usadas para remover espaços em branco e outros caracteres de controle (como novas linhas) do final de uma string.

~~~php
chop(string $string, string $character_mask = " \t\n\r\0\x0B") : string
~~~

* $string: A string da qual você deseja remover caracteres no final.
* $character_mask (opcional): Uma string contendo os caracteres que você deseja remover. O padrão é uma lista de caracteres de espaço em branco e controle, como espaço, tabulação, nova linha, retorno de carro, nulo e controle vertical. Você pode fornecer sua própria lista de caracteres para serem removidos.