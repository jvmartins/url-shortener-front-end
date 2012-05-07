function onFocusURL(campo) {
	if(campo.value == 'http://') {
		campo.value = '';
	}
}

function onBlurURL(campo) {
	if(campo.value == '') {
		campo.value = 'http://';
	}
}

function getTwitter() {
	new TWTR.Widget({
		  version: 2,
		  type: 'search',
		  search: 'palmeir.as',
		  interval: 6000,
		  title: '',
		  subject: 'E no Twitter...',
		  width: 'auto',
		  height: 512,
		  theme: {
		    shell: {
		      background: '#ffffff',
		      color: '#197d26'
		    },
		    tweets: {
		      background: '#ffffff',
		      color: '#444444',
		      links: '#219631'
		    }
		  },
		  features: {
		    scrollbar: false,
		    loop: true,
		    live: true,
		    hashtags: true,
		    timestamp: true,
		    avatars: true,
		    toptweets: true,
		    behavior: 'default'
		  }
		}).render().start();
}

function onReady() {
	$("#formencurtar").submit(function(){
		var textoUrl = $("#url").val();
		var erro = false;
		var menssagem = null;
		if (textoUrl == "" || textoUrl == "http://") {  
			erro = true;
			mensagem = "Digite uma URL na caixa de texto!";
		}
		if(!erro) {
			if (textoUrl.indexOf('.') == -1) {
				erro = true;
				mensagem = "URL inválida!";
			}
		}
		if(erro) {
			$.notifyBar({
			    html: mensagem,
			    cls: "error"
			  });
			$("#url").focus();
		    $('#descricao').show();
		    $('#resultado').hide();
		    return false;
		}
		$.blockUI({message: null});
		$.post("encurtando.php",
				{url: $('#url').val()},
				function(dados){
					if (dados.success == false) {
						$.unblockUI();
						$.notifyBar({
						    html: "Erro ao tentar encurtar a URL. Tente novamente.",
						    delay: 3500,
						    cls: "error"
						  });
					} else {
						$.unblockUI();
						$('#descricao').hide();
						$('#url').val(dados.url);
						$('#urlCopy').val(dados.shorturl);
						$("#facebook").attr("href", "http://www.facebook.com/share.php?src=bm&t=&v=3&u=" + dados.shorturl);
						$("#twitter").attr("href", "http://twitter.com/timeline/home?status=" + dados.shorturl);
						$("#orkut").attr("href", "http://promote.orkut.com/preview?nt=orkut.com&du=" + dados.shorturl);
						$("#linkedin").attr("href", "http://www.linkedin.com/shareArticle?mini=true&url=" + dados.shorturl);
						$("#buzz").attr("href", "http://www.google.com/buzz/post?message=&url=" + dados.shorturl);
						$('#resultado').show();
						$.notifyBar({
							html: "URL encurtada com sucesso!",
							delay: 1000,
							cls: "success"
						}); 
						var clip = new ZeroClipboard.Client();
						clip.setHandCursor(true);
						clip.addEventListener('mouseOver', function (client) {
							clip.setText(dados.shorturl);
						}); 			
						clip.addEventListener('complete', function (client, text) {
							$.notifyBar({
								html: "URL copiada para a área de transferência!",
								delay: 2000,
								cls: "neutro"
							}); 
						});			
						clip.glue('divCopiar');
						clip.setText(dados.shorturl);
					}
	         	},
	            "json");
     	 return false;
	});
}