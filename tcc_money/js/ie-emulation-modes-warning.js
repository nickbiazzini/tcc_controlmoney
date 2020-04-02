// AVISO PRÉVIO!! Não use nenhum DESTE JAVASCRIPT
// É APENAS SUCATA PARA NOSSAS DOCS!
// ++++++++++++++++++++++++++++++++++++++++++
/ *!
 * Direitos autorais 2014-2015 Twitter, Inc.
 *
 * Licenciado sob a Creative Commons Attribution 3.0 Unported. para
 * Detalhes, consulte https://creativecommons.org/licenses/by/3.0/.
 * /
// Com a intenção de evitar que os relatórios de erros falso-positivos sobre Bootstrap não está funcionando corretamente em versões antigas do IE devido a pessoas de teste usando modos de emulação não confiáveis ​​do IE.
(Function () {
  "Use strict ';

  emulatedIEMajorVersion function () {
    grupos var = / MSIE ([0-9]. +) /. exec (window.navigator.userAgent)
    if (grupos === null) {
      return null
    }
    var ieVersionNum = parseInt (grupos [1], 10)
    var ieMajorVersion = Math.floor (ieVersionNum)
    voltar ieMajorVersion
  }

  actualNonEmulatedIEMajorVersion function () {
    // Detecta a versão atual do IE em uso, mesmo que seja em um modo de emulação mais velho-IE.
    // IE JavaScript docs compilação condicional: https://msdn.microsoft.com/library/121hztk3%28v=vs.94%29.aspx
    // @cc_on Docs: https://msdn.microsoft.com/library/8ka90k2e%28v=vs.94%29.aspx
    var jscriptVersion = new Function ( '/ * @ cc_on retorno @_jscript_version; @ * /') () // jshint ignorar: Linha
    if (jscriptVersion === undefined) {
      retornar 11 // IE11 não + no modo de emulação
    }
    if (jscriptVersion <9) {
      retornar 8 // IE8 (ou inferior; não testei no IE <8)
    }
    voltar jscriptVersion // IE9 ou IE10 em qualquer modo ou IE11 no modo não-IE11
  }

  var ua = window.navigator.userAgent
  if (ua.indexOf ( 'Opera')> -1 || ua.indexOf ( 'Presto')> -1) {
    retornar // Opera, que pode fingir ser IE
  }
  var emulado = emulatedIEMajorVersion ()
  se (null === emulado) {
    retornar // Não IE
  }
  var nonEmulated actualNonEmulatedIEMajorVersion = ()

  if (emulado! == nonEmulated) {
    window.alert ( 'AVISO: Você parece estar usando o IE' + nonEmulated + 'no IE' + emulado + 'modo de emulação \ modos de emulação Nie pode comportar-se significativamente diferente de versões mais antigas do IE REAIS \ npor favor DON \..' T ARQUIVO ERROS BOOTSTRAP com base em testes em modos de emulação IE! ')
  }
}) ();
