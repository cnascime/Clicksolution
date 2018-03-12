<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="quCgvR4k6ZZ7HtAABgT2SohvyYDkvzXeGXor-YEku3g" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - clicksolution</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />

<?php //banner ?>
<link href="css/Slider.css" rel="stylesheet" type="text/css" />
    <?php //script banners home ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true
			});
		});	
	</script>


<meta name="description" content="A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes consultoria e projetos de infraestrutura de redes, servidores, links de dados, interconectividade, segurança e suporte técnico para diversas modalidades do segmento."/>
<meta name="keywords" content="clicksolution, clicksolution sorocaba, click solution, click solution sorocaba, tecnologia da informação sorocaba, infraestrutura de redes sorocaba, redes sorocaba, liks de dados sorocaba, interconectividade sorocaba, segurança de redes sorocaba"/>

</head>
<body id="home">
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
    	<?php include'banner.php'; ?>
      	<br /><img src="images/clicksolution.jpg" width="173" height="49" /><br />
	  	<p>A clicksolution é uma empresa que atua no ramo de tecnologia da informação provendo aos clientes consultoria e projetos de infraestrutura de redes, servidores, links de dados, interconectividade, segurança e suporte técnico para diversas modalidades do segmento. <a href="click-solution"> [+]</a></p>
    	<img src="images/bannerbase.jpg" width="655" height="73" "Banner clicksolution"/>
    </div>
        
	</div><!--Fim Main-->
</div><!--Fim Wrap-->

<?php include("footer.php"); ?>

</body>
</html>