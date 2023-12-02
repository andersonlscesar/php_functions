<?php

$file = fopen( __DIR__ . '/../0_files/1_file.txt', 'w');

if ( $file ) {
    
    $name = 'Anderson';
    $age = 25;

    $bytes_written = fprintf( $file, "Name: %s, Age: %d", $name, $age);

    fclose( $file );

    if ( $bytes_written !== false ) {
        print "Dados gravados com sucesso";
    } else {
        print "Erro ao gravar dados";
    }
} else {
    print "Erro ao abrir arquivo";
}