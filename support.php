<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Support - clicksolution</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />


<meta name="description" content="A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes projetos de infraestrutura de redes, links de dados, interconectividade, segurança, suporte técnico e consultoria em diversas modalidades do segmento."/>
<meta name="keywords" content="clicksolution, clicksolution sorocaba, click solution, click solution sorocaba, tecnologia da informação sorocaba, infraestrutura de redes sorocaba, redes sorocaba, liks de dados sorocaba, interconectividade sorocaba, segurança de redes sorocaba"/>

</head>
<body id="support">
<div id="wrap">
	<div id="menu">
    	<?php include'menu.php'; ?>    
    </div>
    <div id="header">
		<?php include'header.php'; ?>
    </div>

	<div id="main">
	<div id="left-menu">
		<?php include'menulateral.php'; ?>
        <br /><br /><br />
        <img src="images/helpdeskmenulateral.png" width="140" height="25" /> 
		<form name="login" method="post" action="#" onSubmit="return validaForm()">
			
            <label for="login">Login<br />
		    <input  type="pasword" name="login" maxlength="30" size="20">
			</label>
			<label for="senha">Senha<br />
			<input type="pasword" name="senha" maxlength="30" size="20">
            </label>
            <input type="image" class="botao" src="images/btlogar.png" name="submit" />
            
            
		</form>      
        
    </div>
    <div id="conteudo">
    	<h1>Suporte Remoto</h1><br />
        <p><b>Suporte técnico em tempo real</b></p><br />
        <p>
        	O Clicksupport é um serviço da clicksolution que visa prover suporte técnico em tempo real exclusivamente via internet para servidores e desktops. 
        </p><br />
        
        <br />
        <br />
		<div id="suporte">
		<p>	Para obter o suporte remoto é necessário seguir os seguintes passos:</p><br />
        <ol>
			<li>Informe seus dados e problema para a equipe de <a href="contato"><b>suporte</b></a>.</li>
            <br /> 
            <li>Um código será gerado e enviado para seu email. Caso não receba cheque seu antispam ou contate <a href="mailto:atendimento@clicksolution.net.br">atendimento@clicksolution.net.br</a></li>
            <br />
			<li>Adicione em seu skype o contato do suporte técnico, conforme as instruções do email recebido.</li>
            <br />
			<li>Aguarde até o técnico responder sua solicitação e lhe enviar instruções para acesso remoto.</li>
        </ol>
		</div>
    </div>
        
	</div><!--Fim Main-->
</div><!--Fim Wrap-->

<?php include("footer.php"); ?>

</body>
</html>