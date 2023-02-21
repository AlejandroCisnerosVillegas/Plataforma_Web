$(document).ready(function(){
demo.initChartist();
  $.notify({
  icon: 'pe-7s-check',
  message: "El registro se ha modificado con éxito."
  },{
  type: 'warning',
  timer: 4000
  });
});