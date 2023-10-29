# Função addcslashes

A função addcslashes em PHP é usada para adicionar barras invertidas de escape a caracteres específicos em uma string. Ela é útil quando você precisa escapar caracteres que têm um significado especial em linguagens de programação, como aspas, barras invertidas e outros caracteres que podem causar problemas em determinados contextos, como SQL ou HTML.

~~~php 
string addcslashes ( string $str , string $charlist )
~~~

* $str: A string à qual você deseja adicionar barras invertidas de escape.
* $charlist: Uma string que lista os caracteres que você deseja escapar na string $str.