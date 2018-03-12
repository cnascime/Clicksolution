<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Helpdesk - clicksolution</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />


<meta name="description" content="A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes projetos de infraestrutura de redes, links de dados, interconectividade, segurança, suporte técnico e consultoria em diversas modalidades do segmento."/>
<meta name="keywords" content="clicksolution, clicksolution sorocaba, click solution, click solution sorocaba, tecnologia da informação sorocaba, infraestrutura de redes sorocaba, redes sorocaba, liks de dados sorocaba, interconectividade sorocaba, segurança de redes sorocaba"/>

</head>
<body id="helpdesk">
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
    </div>
    <div id="conteudo">
    	<h1>Helpdesk</h1><br />
        <p><b>Página em Desenvolvimento</b></p><br />
		<form name="login" method="post" action="#" onSubmit="return validaForm()">
			
            <label for="login">Login<br />
		    <input  type="pasword" name="login" maxlength="30" size="20"><br />
			</label>
			<label for="senha">Senha<br />
			<input type="pasword" name="senha" maxlength="30" size="20"><br /><br />
            </label>
            <input type="image" src="images/btlogar.png" name="submit" /><br /><br />
		</form>      
        <br />
        <p>
        <?PHP //INSERIR FUTURO TEXTO AQUI ?>
        </p><br />
    </div>
        
	</div><!--Fim Main-->
</div><!--Fim Wrap-->

<?php include("footer.php"); ?>

</body>
</html>