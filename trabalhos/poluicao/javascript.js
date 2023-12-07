$(document).ready(function() {
  $('#filtroAssunto').on('change', function() {
    let SelectValue ='#' + $(this).val();
    $('#principal').children('div').hide();
    $('#principal').children(SelectValue).show();
  });
});