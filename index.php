<?php 
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>palmeir.as - O Encurtador de URLs do Palmeiras</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="Encurtador de URLs do Palmeiras">
	<meta name="keywords" content="Palmeiras, Verdão, Verdao, Porco, palmeir.as">
	<link rel="shortcut icon" type="image/png" href="<?php echo YOURLS_SITE; ?>/images/favicon.gif">
	<link rel="stylesheet" type="text/css" href="<?php echo YOURLS_SITE; ?>/css/pages_style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo YOURLS_SITE; ?>/css/share.css?v=<?php echo YOURLS_VERSION; ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo YOURLS_SITE; ?>/css/jquery.notifybar.css" media="screen" />
	<script src="<?php echo YOURLS_SITE; ?>/js/functions.js" language="javascript" type="text/javascript"> </script>
	<script src="<?php echo YOURLS_SITE; ?>/js/jquery-1.4.3.min.js" type="text/javascript"></script>
	<script src="<?php echo YOURLS_SITE; ?>/js/ZeroClipboard.js?v=<?php echo YOURLS_VERSION; ?>" type="text/javascript"></script>
	<script src="<?php echo YOURLS_SITE; ?>/js/share.js?v=<?php echo YOURLS_VERSION; ?>" type="text/javascript"></script>
	<script src="<?php echo YOURLS_SITE; ?>/js/functions.js?v=<?php echo YOURLS_VERSION; ?>" type="text/javascript"></script>
	<script src="<?php echo YOURLS_SITE; ?>/js/jquery.notifybar.js" language="javascript" type="text/javascript"></script>
	<script src="<?php echo YOURLS_SITE; ?>/js/jquery.blockUI.js" language="javascript" type="text/javascript"></script>
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script type="text/javascript">ZeroClipboard.setMoviePath("<?php echo YOURLS_SITE; ?>/js/ZeroClipboard.swf");</script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-21494578-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			onReady();
			<?php if ( isset( $_GET['u'] ) ) {
				$url = yourls_sanitize_url( $_GET['u'] ); ?>
				$('#url').val("<?php echo $url ?>");
				$("#formencurtar").submit();
			<?php } ?>
		});
	</script>
</head>
<body>
	<div class="logo">
		<a href="http://palmeir.as">
			<img src="<?php echo YOURLS_SITE; ?>/images/logo.png" border="0">
		</a>
	</div>
	<div id="container" class="divBase divPrincipal">
		<div class="divEncurtar">
			<form id="formencurtar" method="post" action="">
				<div style="float:left; padding-right:3px;">
					<input id="url" class="textoURL" type="text" name="url" value="http://" onFocus="onFocusURL(this)" onBlur="onBlurURL(this)" />
				</div>
				<div style="float:left;">
					<input id="encurtar" class="botaoSubmit" type="submit" value="Encurtar" />
				</div>
			</form>
		</div>
		<div id="lado" class="divLado">
			<div id="twitterLado" class="divTwitterLado">
				<script>
					getTwitter();
				</script>
			</div>
			<div id="divulgacaoLado" class="divDivulgacaoLado">
				<a href="http://www.palmeiras.com.br" target="_blank">
					<img src="<?php echo YOURLS_SITE; ?>/images/site-palmeiras.jpg" border="0">
				</a>
			</div>
		</div>
		<div id="corpoBase" class="divCorpoBase">
			<div id="descricao" class="divDescricao">
				<div>
					<br>
					<b>Para encurtar a URL</b><br><br>
				</div>
				<div>
					Digite na caixa de texto a URL que deseja encurtar, clique em 'Encurtar' e terá uma URL reduzida do <I>http://palmeir.as/</I>, o Encurtador do Palmeiras.
				</div>
				<div class="divDonate">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="RN2NBWWB2AQLC">
						<input type="image" title="Ajude a manter o encurtador de URLs do Palmeiras no ar!" src="<?php echo YOURLS_SITE; ?>/images/donate.png" border="0" name="submit" alt="Ajude a manter o encurtador de URLs do Palmeiras no ar!">
					</form>
				</div>
				<div>
					<br>
					<b>Personalize sua URL</b><br><br>
				</div>
				<div>
					Escolha a palavra que fará referência ao seu site. Como por exemplo, <I>http://palmeir.as/site</I>. Entre em <a href="mailto:contato@palmeir.as" style="text-decoration:none; color: #2F4F2F;"><b>contato</b></a>.
				</div>
				<div>
					<br>
					Algumas URLs já personalizadas:
					<I><b>
					<div style="margin-top:5px; font-size: 13px;">- <a href="http://palmeir.as/oficial" style="color: #2F4F2F;" target="_blank">http://palmeir.as/oficial</a></div>
					<div style="margin-top:3px; font-size: 13px;">- <a href="http://palmeir.as/radio" style="color: #2F4F2F;" target="_blank">http://palmeir.as/radio</a></div>
					<div style="margin-top:3px; font-size: 13px;">- <a href="http://palmeir.as/anypal" style="color: #2F4F2F;" target="_blank">http://palmeir.as/anypal</a></div>
					</b></I>
				</div>
				<div>
					<br><br>
					<b>Use no TweetDeck</b><br><br>
				</div>
				<div>
					Adicione o link <I>http://palmeir.as/api.php?url=%@</I> para criar suas URLs do palmeir.as diretamente do TweetDeck.
				</div>
				<div>
					<br><br>
					<b>Utilizando o prefixo palmeir.as</b><br><br>
				</div>
				<div>
					Quando estiver visualizando uma página, adicione <I>palmeir.as/</I> no inicío da URL que desejar encurtar (antes do <I>http://</I>) e presione Enter.
				</div>
				<div style="font-size: 12px;">
					<br><br>
					<b>Siga-nos no Twitter: <a href="http://www.twitter.com/EncurtaVerdao" target="_blank" style="text-decoration:none; color: #197d26;">@EncurtaVerdao</a></b>
				</div>
			</div>
			<div id="resultado" class="divResultado">
				<br><br>
				<div id="divCopiar" class="divCopy">
					<img src="<?php echo YOURLS_SITE; ?>/images/btCopiar.png" class="imgCopy" alt="Copiar" >
					<input id="urlCopy" type="text" class="divCopyArea" value="http://palmeir.as"/>
				</div>
				<br>
				<div id="links" class="divLinks">
					<a target="_blank" id="facebook" href="#" style="text-decoration:none;">
						<img src="<?php echo YOURLS_SITE; ?>/images/icons/facebook.png" title="Compartilhe no Facebook" border="0" width="40" height="40">
					</a>
					<a target="_blank" id="twitter" href="#" style="text-decoration:none;">
						<img src="<?php echo YOURLS_SITE; ?>/images/icons/twitter.png" title="Compartilhe no Twitter" border="0" width="40" height="40">
					</a>
					<a target="_blank" id="orkut" href="#" style="text-decoration:none;">
						<img src="<?php echo YOURLS_SITE; ?>/images/icons/orkut.png" title="Compartilhe no Orkut" border="0" width="40" height="40">
					</a>
					<a target="_blank" id="linkedin" href="#" style="text-decoration:none;">
						<img src="<?php echo YOURLS_SITE; ?>/images/icons/linkedin.png" title="Compartilhe no Linkedin" border="0" width="40" height="40">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="containerinferior" class="divBase divRodape">
		<a href="mailto: contato@palmeir.as" style="text-decoration:none; color: #1C1C1C;">contato@palmeir.as</a>
	</div>
</body>
</html>