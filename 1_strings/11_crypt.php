<?php

$str = "senha";
$crypt = crypt( $str, '$6$rounds=5000$anexamplestringforsalt$');
print $crypt;

// $6$rounds=5000$anexamplestringf$dAOgIxBwXGHTu6R2MnRiFDD3GeZYfYNungr9SFBIbwlW95nMHYdcUFOOivFLMDeX5H94tFrREPAdSvfhPBgsy.