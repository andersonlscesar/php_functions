# Função chunk_split()

A função chunk_split() em PHP é usada para dividir uma string em pedaços menores (chunks) e adicionar um caractere de delimitador (geralmente uma quebra de linha) entre esses chunks. Isso é frequentemente usado para formatar dados em blocos de tamanho fixo, como na formatação de saída de dados binários ou em envio de e-mails com anexos codificados.

~~~php
chunk_split(string $string, int $length = 76, string $end = "\r\n") : string
~~~

* $string: A string que você deseja dividir em pedaços menores.
* $length (opcional): O tamanho máximo de cada chunk. O valor padrão é 76.
* $end (opcional): O caractere de delimitador a ser adicionado ao final de cada chunk. O valor padrão é uma quebra de linha ("\r\n").