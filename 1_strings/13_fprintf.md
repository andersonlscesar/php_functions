# fprintf()


A função fprintf() em PHP é usada para escrever em um arquivo, assim como a função fprintf() da linguagem C. Ela é semelhante à função printf(), mas, em vez de imprimir a string formatada na saída padrão, ela a escreve em um arquivo.

~~~php
fprintf(resource $handle, string $format, mixed ...$values): int
~~~

* $handle: Um identificador de recurso de arquivo (geralmente retornado por fopen() ou similar).
* $format: Uma string de formato que controla como os argumentos subsequentes são formatados. Assim como em printf(), os marcadores de posição na string de formato são substituídos pelos valores fornecidos em $values.
* $values: Os valores a serem formatados e gravados no arquivo.

A função retorna o número de bytes escritos no arquivo ou false em caso de erro.

Aqui está um exemplo simples de uso da função fprintf():

