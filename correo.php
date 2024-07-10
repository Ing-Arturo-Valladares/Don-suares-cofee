<?php
    $destinatario='valladares.alvarez.02@gmail.com';
    $nombre=$_POST['name'];
    $correo=$_POST['email'];
    $telefono=$_POST['phone'];
    $asunto=$_POST['subject'];
    $mensaje=$_POST['message'];
    mail($destinatario,$asunto,$correo,$nombre,$mensaje);
    echo "<script>alert('correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>