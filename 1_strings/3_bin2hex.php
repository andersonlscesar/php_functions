<?php

$hex = bin2hex("Hello, World");
print $hex;

// 48656c6c6f2c20576f726c64

$bin = 11111001;
$hex2 = bin2hex($bin);
print $hex2;

// 3131313131303031