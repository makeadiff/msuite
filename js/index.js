$(document).ready(function(){

  $('button.toast-toggle').click(function(){
    $('#toast-'+this.id).toast('show');
  });

  $('.copy').click(function(){
    // Code Copy to Clipboard

  });


})


function codeCopy(component,div_id){

  var code = $('#'+div_id).html();
  code = code.replace(/</g,'&lt;');
  code = code.replace(/>/g,'&gt;');
  var pre_code_appended = '<pre>'+'<code>'+ code + '</code>'+'</pre>';
  copy_code = $('#'+component+' .code').html();
  $('#'+component+' .code').html(copy_code+pre_code_appended);
}
