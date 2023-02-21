$(document).ready(function(){
  demo.initChartist();
  $.notify({
  icon: 'pe-7s-diskette',
  message: "El postulado fue aceptado con éxito."
  },{
  type: 'success',
  timer: 4000
  });
});