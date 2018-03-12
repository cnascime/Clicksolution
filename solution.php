<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quem Somos - clicksolution</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />


<meta name="description" content="A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes consultoria e projetos de infraestrutura de redes, links de dados, interconectividade, segurança e suporte técnico para diversas modalidades do segmento."/>
<meta name="keywords" content="clicksolution, clicksolution sorocaba, click solution, click solution sorocaba, tecnologia da informação sorocaba, infraestrutura de redes sorocaba, redes sorocaba, liks de dados sorocaba, interconectividade sorocaba, segurança de redes sorocaba"/>

</head>
<body id="solution">
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
    	<h1>Quem somos</h1><br />
        <p><b>Perfil da empresa</b></p><br />
        <p>A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes consultoria em infraestrutura, links de dados, interconectividade, segurança e suporte técnico para diversas modalidades do segmento.</p><br />
        <p>A tecnologia está presente na vida e no cotidiano de todos num cenário de constantes mudanças. Por isso a clicksolution preza pela adaptabilidade e permanece em constante atualização profissional e logística visando à satisfação de nossos clientes.</p><br />
        <p>Formada por profissionais com mais de 20 anos de atuação no mercado adquirimos um histórico de credibilidade qualidade e confiança e temos como missão ser lembrados como uma das melhores empresas provedoras de soluções em infraestrutura do país.</p><br />
        <p>Prezamos por valores éticos, profissionalismo e contamos com o apoio de profissionais altamente qualificados bem como parcerias com as mais conceituadas empresas.</p><br />
    </div>
        
	</div><!--Fim Main-->
</div><!--Fim Wrap-->

<?php include("footer.php"); ?>

</body>
</html>