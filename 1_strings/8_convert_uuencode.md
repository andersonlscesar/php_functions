# convert_uuencode()


A função convert_uuencode() do PHP codifica uma string usando o algoritmo uuencode. O uuencode é um algoritmo de codificação que transforma dados binários em uma sequência de caracteres imprimíveis, o que os torna seguros para transmissão em rede.

A função convert_uuencode() recebe uma string como parâmetro e retorna a string codificada com uuencode. A string codificada será aproximadamente 35% maior que a string original, pois cada bloco de 3 bytes é codificado em 45 caracteres.

A função convert_uuencode() não produz as linhas de início e fim que são usadas em arquivos uuencoded. Essas linhas são necessárias para identificar o início e o fim de um arquivo uuencoded, mas não são necessárias para transmitir dados binários pela rede.

~~~php 
convert_uuencode(string $string): string
~~~