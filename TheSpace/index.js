function confirmar(){
  var usuario = $('#usuario').val();
  var pass = $('#pass').val();
  $.ajax({
    url: 'login.php',
    type: 'post',
    data: 'usuario='+usuario+'&pass='+pass
  }).done(function(resp){
    console.log('si');
  });
}
