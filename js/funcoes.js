$(function(){

	// Criação da função que pega a maior altura da div grid
	function padronizaHeight() {

		// Setando o css da div grid como auto antes de setar as outras configurações 
		$('.elemento').css('height', 'auto');

		// criação de um array chamado alturas para armazenar todos os heights  das divs
		var alturas = new Array();

		// Iniciando uma função de each, tipo o foreach do php 
		$('.elemento').each(function(){

			// O array alturas vai iterar o height de cada uma delas
			alturas.push($(this).height());

		});

		// Depois de ter o array com todos os tamanhos de todas as divs a gente seta o css de todas elas pegando o maior valor do array
		$('.elemento').css('height', Math.max.apply(null, alturas) + 'px');

	}

	// Aqui a gente chama a função assim que carrega o arquivo.js
	padronizaHeight();

	$(window).load(function(){

		padronizaHeight();

	});

	// Aqui a gente chama um evento que dispara assim que o user redimensiona a página
	$(window).on('resize', function(){

		// Assim que ele redimensionar essa nossa função é disparada
		padronizaHeight();

	});

	function mudalang(){

		var now = new Date();
		var time = now.getTime();
		time += 5 * 365 * 24 * 3600 * 1000;
		now.setTime(time);

		$('.lang_pt').click(function(){

			document.cookie = 'lang=' + 'pt' + '; expires=' + now.toUTCString() + '; path=/';

			window.location.reload(true);

		});

		$('.lang_en').click(function(){

			document.cookie = 'lang=' + 'en' + '; expires=' + now.toUTCString() + '; path=/';

			window.location.reload(true);

		});

		$('.lang_ru').click(function(){

			document.cookie = 'lang=' + 'ru' + '; expires=' + now.toUTCString() + '; path=/';

			window.location.reload(true);

		});

	}

	mudalang();
    
    

});

// Fecho pai, faz fortalece ai 

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});