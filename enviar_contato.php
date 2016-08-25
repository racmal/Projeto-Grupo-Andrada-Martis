<?php

/* Enviar E-mail com resposta Automática*/

// Recebendo os dados passados pela página "formulario.php e "unidade.php"

// Vamos definir agora o destinatário do email
$para = "raphaelazevedocarvalho@gmail.com;

// Definindo o aspecto da mensagem

$texto_final = '';
$texto_final .=  "Nome: {$_POST['nome']}<br>";
$texto_final .=  "Email: {$_POST['email']}<br>";
$texto_final .=  "Telefone: {$_POST['telefone']}<br>";
$texto_final .=  "Celular: {$_POST['celular']}<br>";

$headers = "Content-type:text/html; charset=utf-8"; 

// Enviando a mensagem para o destinatário
$envia = mail($para,"E-mail do Site",$texto_final,$headers);


//email de agradecimento (enviar para o cliente)

$agradecimento = file_get_contents("agradecimento.php");

$agradecimento = str_replace("NOMEPESSOA", $_POST['nome'], $agradecimento);

$envia = mail($_POST['email'],"Agradecimento do site",$agradecimento,$headers);

// Email solicitado

$email = file_get_contents("email.php");

$email = str_replace("NOMEPESSOA", $_POST['nome'], $email);

$envia = mail($_POST['email'],"Agradecimento do site",$email,$headers);


header("location: agradecimento.php?nome={$_POST['nome']}");


?>