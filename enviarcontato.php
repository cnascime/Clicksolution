<?php
$contato = 'contato';

/* Verifica qual � o sistema operacional do servidor para ajustar o cabe�alho de forma correta. N�o alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
$to    = 'atendimento@clicksolution.net.br';
//$emailwebmaster    = 'contato@clicksolution.com.br';
$subject 		   = 'Formul�rio de Contato - Click Solution';
//$emailsender       = 'webmaster@clicksolution.com.br';
$emailsender       = 'atendimento@clicksolution.net.br';
$comcopia          = '';
$comcopiaoculta    = '';


$nome     		   = $_POST['nome'] ;
$email    		   = $_POST['email'] ;
$telefone 		   = $_POST['telefone'];
$mensagem 		   = $_POST['mensagem'] ;



/*------------------------ ENVIO POR EMAIL -----------------------------*/
$message = NULL;
$message.= "------------------------------------------<br>";
$message.= "<h3>Formul&aacute;rio de Contato - Clicksolution</h3>";
$message.= "------------------------------------------<br>";
$message.= "<b> DADOS: </b> <br>";
$message.= "<b> Nome: </b> ".$nome."<br>";
$message.= "<b> E-mail: </b> ".$email."<br>";
$message.= "<b> Telefone: </b> ".$telefone."<br>";
$message.= "<b> mensagem: </b> ".$mensagem."<br>";
$message.= "------------------------------------------<br>";
		 
/* Montando o cabe�alho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima cont�m "text/html", sem essa linha, a mensagem n�o chegar� formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo s�o porque o Postfix obriga que se um cabe�alho for especificado, dever� haver um valor.
// Se n�o houver um valor, o item n�o dever� ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente ser� usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
//mail("cnascime@gmail.com","teste de email","teste de email","teste@teste");
mail($to, $subject, utf8_decode($message), $headers, "-r". $emailsender);
header( "Location: $contato" );

?>