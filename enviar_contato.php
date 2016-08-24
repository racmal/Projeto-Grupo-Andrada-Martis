<?php

/* Enviar E-mail com resposta Automática*/

// Recebendo os dados passados pela página "form_contato.php"

// Vamos definir agora o destinatário do email, ou seja, você ou seu cliente

$para = "raphaelazevedocarvalho@gmail.com";

// Definindo o aspecto da mensagem

$texto_final = '';
$texto_final .=  "Nome: {$_POST['nome']}<br>";
$texto_final .=  "Email: {$_POST['email']}<br>";
$texto_final .=  "Telefone: {$_POST['telefone']}<br>";
$texto_final .=  "Celular: {$_POST['celular']}<br>";


$headers = "Content-type:text/html; charset=utf-8"; 

// Enviando a mensagem para o destinatário
$envia = mail($para,"E-mail do Site",$texto_final,$headers);


header('location: agradecimento.php');

?>