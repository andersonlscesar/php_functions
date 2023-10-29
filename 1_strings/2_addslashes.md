# Função addslashes 

Returna uma string com barras invertidas adicionadas antes dos caracteres que precisam ser escapados.
Esses caracteres são:

* single quote (')
* double quote (")
* backslash (\)
* NUL (The NUL byte)

~~~php
addslashes(string $string): string
~~~