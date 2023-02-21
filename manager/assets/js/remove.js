$(document).ready(function(){
demo.initChartist();
  $.notify({
  icon: 'pe-7s-info',
  message: "El registro se ha eliminado con éxito."
  },{
  type: 'danger',
  timer: 4000
  });
});