var App = (function () {
  'use strict';
  App.ns_system = function( ){
    //funciones declaradas protegidas
    function customFunction(){
    }
    //funciones disparadas
    customFunction();
  };
  return App;
})(App || {});

function customAccordion(control){
  var claseCollapsed = "custom-collapsed";
  var claseBorde = "border-initial";
  var claseIconCollapsed = "s7-angle-down";
  var claseIconNoCollapsed = "s7-angle-right";
  var ctr = $(control);
  var icon = ctr.find(".custom-collapse-icon").first();
  var target = ctr.attr("data-target");
  var ctnTarget = $(target);
  var ctnIndicator=ctr.parent();
  var ctnsDescriptions = $(".desc-collapsed");
  ctnsDescriptions.each(function() {
    var ctnDesc_=$(this);
    if (!ctnDesc_.hasClass(claseCollapsed)) {
      var target_="#"+ctnDesc_[0].id;
      if (target_!=target) {
        var control_=$("a.indicator-item-icon[data-target='"+target_+"']").first();
        var icon_ = control_.find(".custom-collapse-icon").first();
        var ctnIndicator_=control_.parent();
        ctnDesc_.addClass(claseCollapsed);
        icon_.removeClass(claseIconCollapsed);
        icon_.addClass(claseIconNoCollapsed);
        ctnIndicator_.removeClass(claseBorde);
      }
    }
  });
  if (ctnTarget.hasClass(claseCollapsed)) { // mostrar
    ctnTarget.removeClass(claseCollapsed);
    icon.removeClass(claseIconNoCollapsed);
    icon.addClass(claseIconCollapsed);
    ctnIndicator.addClass(claseBorde);
  }
  else{ //ocultar
    ctnTarget.addClass(claseCollapsed);
    icon.removeClass(claseIconCollapsed);
    icon.addClass(claseIconNoCollapsed);
    ctnIndicator.removeClass(claseBorde);
  }
  //console.log(ctr,icon,target,ctnTarget);
}
