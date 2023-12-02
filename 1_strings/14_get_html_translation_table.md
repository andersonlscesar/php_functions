# get_html_translation_table()

A função get_html_translation_table() em PHP retorna a tabela de tradução usada pelo htmlspecialchars() e htmlentities() para converter caracteres especiais em entidades HTML. Ela retorna uma array associativa onde as chaves são os caracteres especiais e os valores são as entidades HTML correspondentes.

A sintaxe básica da função é a seguinte:

~~~php 
get_html_translation_table(int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string|null $encoding = ini_get("default_charset") [, bool $double_encode = true ]]]): array
~~~

* $table: Especifica qual tabela de tradução será retornada. Os valores possíveis são HTML_SPECIALCHARS (padrão), HTML_ENTITIES, HTML_SPECIALCHARS | HTML_ENTITIES, ou ENT_COMPAT, ENT_QUOTES, ENT_NOQUOTES.
* $flags: Modifica o comportamento da função. Os valores possíveis incluem ENT_COMPAT, ENT_QUOTES, ENT_NOQUOTES, ENT_HTML401, ENT_XML1, ENT_XHTML, ENT_HTML5.
* $encoding: Define a codificação a ser usada na tabela de tradução. O padrão é a codificação padrão definida por ini_get("default_charset").
* $double_encode: Quando definido como false, evita que entidades existentes sejam convertidas novamente.

~~~php
// Obtém a tabela de tradução para caracteres especiais
$translation_table = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);

// Imprime a tabela de tradução
print_r($translation_table);


~~~

~~~shell
Array
(
    ["] => &quot;
    [&] => &amp;
    [<] => &lt;
    [>] => &gt;
)


~~~


Neste exemplo, a tabela de tradução foi configurada para converter aspas duplas, &, <, e > em suas respectivas entidades HTML.

Essa função é útil quando você precisa criar suas próprias funções de escape ou quando deseja personalizar o processo de escape de caracteres especiais em HTML. Normalmente, você usaria as funções htmlspecialchars() ou htmlentities() diretamente, mas get_html_translation_table() pode ser útil em casos mais avançados.