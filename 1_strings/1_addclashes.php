<?php
$text= "Isso é uma 'string' com 'aspas'";
$scaped = addcslashes( $text, "com");
print $scaped;

/**
 * Iss\o é u\ma 'string' \c\o\m 'aspas'
 */