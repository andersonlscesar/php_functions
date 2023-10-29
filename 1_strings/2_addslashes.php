<?php
$str = "O'Reilly?";
$escaped = addslashes($str);
print $escaped;

/**
 * O\'Reilly?a
 */

 $str2 = 'Olá " tudo bem?';
 $escaped2 = addslashes($str2);
 print $escaped2;

 // Olá \" tudo bem?