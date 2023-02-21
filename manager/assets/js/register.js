$(document).ready(function(){
  demo.initChartist();
  $.notify({
  icon: 'pe-7s-diskette',
  message: "Se ha creado el registro con éxito."
  },{
  type: 'success',
  timer: 4000
  });
});