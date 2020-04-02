/ *!
 * IE10 corte janela de exibição para Superfície / desktop Windows 8 bug
 * Direitos autorais 2014-2015 Twitter, Inc.
 * Licenciado sob MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * /

// Consulte o Guia de documentos em curso para obter mais informações:
// http://getbootstrap.com/getting-started/#support-ie10-width

(Function () {
  "Use strict ';

  Se (navigator.userAgent.match (/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement ( "estilo")
    msViewportStyle.appendChild (
      document.createTextNode (
        '@ -ms-Viewport {width: auto importante!}'
      )
    )
    document.querySelector ( "cabeça"). appendChild (msViewportStyle)
  }

}) ();
