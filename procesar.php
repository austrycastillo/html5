<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$mensaje = $_POST['mensaje'];
$para = "austry.castillo@educacionit.com";
$asunto = "Información de contacto web";
$cuerpo = "<h1>Contacto web</h1>La información de contacto es <br>Nombre: ".$nombre."<br>Email: ".$email."<br>Edad: ".$edad."<br>Mensaje: ".$mensaje;
    if(mail($para,$asunto,$cuerpo)){
        echo "Correo enviado correctamente";
    }else{
        echo "Ups no puedo enviar el correo";
    }
?>