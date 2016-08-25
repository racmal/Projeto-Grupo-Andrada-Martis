<?php
include ('cabecalho.php');
include ('menu.php');

$email = file_get_contents("texto_email.php");
$email = str_replace("NOMEPESSOA", $_GET['nome'], $email);
echo $email;

?>


	