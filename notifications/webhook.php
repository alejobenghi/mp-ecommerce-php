<?php

function log($pNombreArchivo, $pTexto){
    $file=fopen($pNombreArchivo.".log","a");
    //contenido
    fputs($file,$pTexto."\r\n");
    fclose($file);
}
    
http_response_code(200);
$input = file_get_contents("php://input");
log('notificacionPOST', $input);