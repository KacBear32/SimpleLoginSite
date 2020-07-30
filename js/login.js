$(document).ready(function(){
$("#zaloguj").click(function(){
  var login_in = $("#login_in").val();
  var haslo = $("#haslo").val();
  //sprawdzanie czy pola wypełnione
  if(login_in == '' || haslo == ''){
    $('input[type="text"],input[type="password"]').css("border","2px solid red");
    $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
    alert("Proszę wypełnić pola logowania!");
  } else {
    $.post("login.php", { login_in1: login_in, haslo1: haslo},
    function(data){
        if (data == 'Login lub hasło jest nieprawidłowe!') {
        $('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
        alert(data);
      } else if (data == 'Udane logowanie!') {
        window.location.href = './konto.php';
        alert(data);
      }else {
        alert(data);
      }
    }
  )
  }
})
})
