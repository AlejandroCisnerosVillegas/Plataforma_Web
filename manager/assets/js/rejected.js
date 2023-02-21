$(document).ready(function(){
demo.initChartist();
  $.notify({
  icon: 'pe-7s-info',
  message: "El postulado fue rechazado con éxito."
  },{
  type: 'danger',
  timer: 4000
  });
});