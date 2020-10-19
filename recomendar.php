<?php
//Recibimos el nombre, de quien recomienda (el dato es en referencia al formulario anterior)
$nombre =$_POST['nombre'];
//Recibimos el nombre de la persona a quien se recomienda (el dato es en referencia al formulario anterior)
$amigo = $_POST['amigo'];
$url = "https://victor-rodenas.com";
//Se recibe el email de la persona que se recomienda, es decir, los datos se enviaran a dicho email.
$email_amigo = $_POST['emailamigo'];
$mensaje = "Hola $amigo, esta es una excelente dirección; $url, deberías revisarla para aprender php!!!,
de: $nombre";

//Montamos el mensaje que vamos a enviar.
// 1 - Asunto del mensaje
$asunto = "$amigo Quisiera que revisaras esta web de php¡¡";
// 2 - El remitente, es decir quien recomienda.
$remitente =$_POST['email'];
// 3 - Función "mail" (que nos permite enviar un correo con los datos que le pasamos) en este caso, le pasamos a donde se envía el mensaje, asunto, mensaje, (y (el remitente)).
if(mail($email_amigo, $asunto, $mensaje,"From: $remitente"))

// Si la función se ejecuta bien, mostramos el siguiente mensaje
echo "<div style='text:align:center'>Tu Solicitud se ha Enviado Correctamente¡</div>";

else //si existe un fallo en la ejecuccion del mensaje nos salta un error
echo "<div style='text:align:center'>Tu Solicitud es erronea¡</div>
