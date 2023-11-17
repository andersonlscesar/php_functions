# convert_uudecode()

A função convert_uudecode() recebe uma string codificada com uuencode como parâmetro e retorna a string decodificada. A string decodificada será o mesmo tamanho da string original, menos os caracteres de início e fim, que são necessários para identificar o início e o fim de um arquivo uuencoded.

~~~ php
convert_uudecode(string $string): string|false
~~~