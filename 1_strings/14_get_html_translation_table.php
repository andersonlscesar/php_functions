<?php

$translation_table = get_html_translation_table( HTML_SPECIALCHARS, ENT_QUOTES );
print_r( $translation_table );

/*

Array
(
    ["] => &quot;
    [&] => &amp;
    ['] => &#039;
    [<] => &lt;
    [>] => &gt;
)

 */