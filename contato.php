<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato - clicksolution - Sorocaba</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />

<?php /*Scripts da mascara*/ ?>
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script type="text/javascript"> 
	jQuery.noConflict(); 
	jQuery(function($){ $("#telefone").mask("(99) 9999-9999"); }); 
</script> 

<?php /*Script de validação*/ ?>
<script type="text/javascript" src="js/validacao.js"></script>

<meta name="description" content="Informações de contato"/>
<meta name="keywords" content="clicksolution, Sorocaba, endereço, cidade, cep, mapa"/>

</head>
<body id="contato">
<div id="wrap">
	<div id="menu">
    	<?php include'menu.php'; ?>    
    </div>
    <div id="header">
		<?php include'header.php'; ?>
    </div>

	<div id="main">
    <br />
    <br />
	<h1 itemprop="name"> Contato </h1> <br/> <br/> 
<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> 
<span itemprop="streetAddress"><b>Endereço:</b>Rua Aparecida, 810, Sala 21</span> | Jd Sta Rosália | 
<span itemprop="addressLocality">Sorocaba</span> 
<span itemprop="addressRegion">SP</span> 
<span itemprop="postalCode"> - cep:18.095-000</span></span><br/>   
<span itemprop="email"><b>E-mail:</b>atendimento@clicksolution.net.br</span><br/>   
<span itemprop="telephone"><b>Telefone:</b>(15) 3016-7353</span> <br/>
    <br/>
<div id="contatoesq">
<br />
		<form name="cadastro" method="post" action="enviarcontato.php" onSubmit="return validaForm()">
			
            <p><label for="nome">Nome: *</label>
		    <input  type="text" name="nome" maxlength="50" size="25"><br />
			</p>
            <div style="clear:both;"></div>
            <p>                                
			<label for="email">E-mail: *</label>
			<input type="text" name="email" maxlength="50" size="25"><br />
            </p>
            <div style="clear:both;"></div>            
            <p>                                
			<label for="telefone">Telefone: *</label>
			<input type="text" name="telefone" id="telefone" maxlength="50" size="25" placeholder="(    )        -        "><br />
            </p>            
            <div style="clear:both;"></div>			
            <p>
			<label for="mensagem">Mensagem: *</label><br />
			<textarea  name="mensagem" maxlength="500" rows="13" cols="50"></textarea><br />
            <input class="botao" type="submit" id="submit"  name="submit" value="Enviar">
			<input class="botao" type="reset" id="reset" value="Limpar">
            </p>        
            
		</form>             
</div>

<div id="contatodir">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:500px;"><div id="gmap_canvas" style="height:350px;width:400px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com/de/gutscheine/goertz" id="get-map-data">http://www.map-embed.com/de/gutscheine/goertz</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-23.4857012,-47.450737900000036),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-23.4857012, -47.450737900000036)});infowindow = new google.maps.InfoWindow({content:"<b>Clicksolution</b><br/>rua aparecida<br/>18095000 sorocaba" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


</div>
        
	</div><!--Fim Main-->
</div><!--Fim Wrap-->

<?php include("footer.php"); ?>

</body>
</html>