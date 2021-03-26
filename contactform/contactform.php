<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Titulo
$titulo = "Mensaje desde sitio web - " . $subject;
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: " . $name . " <" . $email .">\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("nico.leo.busto@gmail.com",$titulo,$message,$headers);
if($bool){
    echo "OK";
}else{
    echo "Mensaje no enviado";
}


 ?>