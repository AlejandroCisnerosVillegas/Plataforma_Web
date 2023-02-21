$(document).ready(function(){
demo.initChartist();
  $.notify({
  icon: 'pe-7s-check',
  message: "El reporte se realizó con éxito."
  },{
  type: 'warning',
  timer: 4000
  });
});