$(document).ready(function() {
  $("#jcontrol").submit(function () {
      //variaveis locais
      var _dados = $(this).serializeArray();
      var _urlphp = $(this).attr("action");
      var _seletoralert = $(".j_seletor");
      var _seletorBtn = $(".btn-primary");
      var _seletorEnviando = $("#j_enviando");
      var _seletorErro = $("#j_error");
      var _seletorSucesso = $("#j_sucesso");
      
      //requisicao Ajax
      $.ajax({
          url: _urlphp,
          data: {dados: _dados},
          type: 'POST',
          dataType: 'json',
          beforeSend: function() {
              
              _seletorEnviando.fadeIn(100);
              _seletorBtn.attr('disabled', 'disabled');
              
          },
          success: function(data) {
            //variaveis locais 
              var _error = data.error;
              
              //esconder mensagem de enviando
              setTimeout(function(){
                  _seletorEnviando.fadeOut(0,function(){
                      //Verifica se houver erro
                      if(!_error) {
                              _seletorSucesso.fadeIn(1000);
                         }else{
                              _seletorErro.fadeIn(500);
                         }
                      //esconder os tickets - seja qual for
                  });    
              },5500);
          }
      });
      return false;
  });
});
$(function(){
    $('.efeito').bind('click', function(){
        $('#janela').fadeToggle();
    });
    $('.efeito-2').bind('click', function(){
        $('#janela-2').fadeToggle();
    });
    $('.efeito-3').bind('click', function(){
        $('#janela-3').fadeToggle();
    });
    $('.efeito-4').bind('click', function(){
        $('#janela-4').fadeToggle();
    });
    $('.efeito-5').bind('click', function(){
        $('#janela-5').fadeToggle();
    });
});
$(function(){
    $('#cpf').mask('000.000.000-00');
    $('#telefone').mask('(00) 0000-0000');
    $('#celular').mask('(00) 00000-0000');
});
$(function(e){
    $('ul li:nth-child(1)').click(function(){
		$('html, body').animate({scrollTop: $('#quemsomos').offset().top }, 2000);
	});
    $('ul li:nth-child(2)').click(function(){
		$('html, body').animate({scrollTop: $('#vantagens').offset().top }, 3000);
	});
    $('ul li:nth-child(3)').click(function(){
		$('html, body').animate({scrollTop: $('#contato').offset().top }, 3000);
	});
});
function rodaitem(){
    $('.gapborder').css('transform', 'rotate(180deg)').css('transition', 'all 2s');
}
function rodaitemdevolta(){
    $('.gaproda').css('transform', 'rotate(0deg)');
}
$(function(){
    $('#botaoroda').on('click', rodaitem);
});