// =====================================
// Scroll handler del timeline vertical
// =====================================
$(window).on("scroll", function () {
    // -------------------------------------
    // Función: determina si un <li> está visible
    // y alterna la clase "active"
    // Además, actualiza la altura de la barra .inner
    // -------------------------------------
    function isScrollIntoView(elem, index) {
      // Límites del viewport
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
  
      // Posición del elemento
      var elemTop = $(elem).offset().top;
      // Umbral: mitad de la ventana por debajo del top del item
      var elemBottom = elemTop + $(window).height() * 0.5;
  
      // Si el item está dentro del umbral, actívalo
      if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
        $(elem).addClass("active");
      }
  
      // Si no alcanza el umbral, desactívalo
      if (!(elemBottom <= docViewBottom)) {
        $(elem).removeClass("active");
      }
  
      // -------------------------------------
      // Progreso de la lista:
      // calcula cuánto de la lista ha pasado por el viewport
      // y ajusta la altura de .list-progress .inner
      // -------------------------------------
      var MainTimelineContainer = $("#vertical-scrollable-timeline")[0];
      var MainTimelineContainerBottom =
        MainTimelineContainer.getBoundingClientRect().bottom -
        $(window).height() * 0.5;
  
      $(MainTimelineContainer)
        .find(".inner")
        .css("height", MainTimelineContainerBottom + "px");
    }
  
    // -------------------------------------
    // Recorre todos los <li> del timeline
    // -------------------------------------
    var timeline = $("#vertical-scrollable-timeline li");
    Array.from(timeline).forEach(isScrollIntoView);
  });
  