<?php

$to      = Config::EMAIL_USER;
$subject = 'Contato - Carline Imports';
$message = 'E-mail de ' .$_GET['firstname']. "\r\n" .$_GET['message'];
$dest = $_GET['email'];

$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Mensagem enviada com sucesso')</script>
<meta http-equiv="refresh" content="0; url=contato">