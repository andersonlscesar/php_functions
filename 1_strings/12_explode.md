# explode()

A função explode() em PHP é usada para dividir uma string em substrings com base em um delimitador especificado. Essa função é útil quando você tem uma string longa que contém valores separados por algum caractere específico, e você deseja dividir essa string em partes menores com base nesse caractere.

## sintaxe

~~~php
explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array
~~~

* $delimiter: O caractere ou sequência de caracteres que será usado como delimitador para dividir a string.
* $string: A string que será dividida em partes.
* $limit: (Opcional) Um número inteiro que especifica o número máximo de elementos no array resultante. Se fornecido, a função retorna no máximo $limit elementos.