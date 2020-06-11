<?php

http_response_code(200);
$input = file_get_contents("php://input");
$file=fopen("notificacionPOST.log","a");
    //contenido
fputs($file,$input."\r\n");
fclose($file);