<?php 
//Developed by @brcmipn
header("Content-Type: text/html;charset=utf-8");

//$para = 'anicolas@chccompetenciaslaborales.com.mx'; 
$para = 'alenicolas10@gmail.com,aramyk@hotmail.com,recepcion@clinicapatriotismo.com'; 

$asunto = "Contacto desde pagina web";

$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=utf-8"."\r\n"; 

$MESSAGE_BODY = "<br>Buen dia.<br><br>".$_POST["nombre"]." quiere que Clinica Patriotismo se ponga en contacto. Sus datos son los siguientes:<br><br>";
$MESSAGE_BODY .= "Tel&eacute;fono: ".$_POST["telefono"]."<br>";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";

$MESSAGE_BODY .= "<br><br>Y dejo un mensaje: <br><br>".$_POST["comentario"]."<br><br><br><br>";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 

//Developed by @brcmipn
header('http://comysel.com.mx/clinica/contacto2.html')?>