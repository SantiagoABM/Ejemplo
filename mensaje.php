<?php
    $destinatario='barbozamujica109@gmail.com';

    $nombre= 'Vale';
    $asunto= 'Ya no quiero nada';
    $mensaje= $_POST('mensaje');
    $email= 'rukasarashina2017@gmail.com';

    $header = 'Perdón Santiago';
    $mensajeCompleto= $mensaje . "\nAtt: " . $nombre;
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Está bien Vale ya me quedó claro :c')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>')";

?>