var optionses = {
  pivianuncio01 : ["SS-PP-RP-B"],

  pivianuncio05 : ["Proyectos"],

  pivianuncio06 : ["Bolsa de Trabajo"]

}

$(function(){
  var fillSecondary = function(){
    var selected = $('#tertiary').val();
    $('#quaternary').empty();
    optionses[selected].forEach(function(element,index){
      $('#quaternary').append('<option value="'+element+'">'+element+'</option>');
    });
  }
  $('#tertiary').change(fillSecondary);
  fillSecondary();
});