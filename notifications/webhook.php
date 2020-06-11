<?php

function log($pNombreArchivo, $pTexto, $pValores=array(), $pEx=null){
        $file=fopen($pNombreArchivo.".log","a");
        //contenido
        fputs($file,"Error: ");
        fputs($file,$pTexto."\r\n");
        fputs($file, json_encode($pValores)."\r\n");
       
        
        if($pEx instanceof Exception){fputs($file,"\r\nException: (".$pEx->getCode().") ".$pEx->getMessage()."\r\ntrace:\r\n".$pEx->getTraceAsString()."\r\n");}

        fclose($file);
    }
    
http_response_code(200);
$input = file_get_contents("php://input");
log('notificacionPOST', '', $input);