<?php

$str = "Anderson";
$counts = count_chars($str, 1);


foreach( $counts as $i => $count ) {
    $s = chr( $i );
    echo "$s : $count " . PHP_EOL;
}