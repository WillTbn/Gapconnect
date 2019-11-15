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