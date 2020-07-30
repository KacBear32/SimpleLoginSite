$(document).ready(function(){
  $("#przypomnij").click(function(){
    var email = $("#email_przy").val();
    if(email == ''){
      $('input[type="text"]').css("border","2px solid red");
      $('input[type="text"]').css("box-shadow","0 0 3px red");
      alert("Proszę wypełnić pole email!");
    } else {
      $.post("../project/php/przypomnienie1.php", {email_przy1: email},
      function(data){
        if (data == 'Niepoprawny email!'){
          $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
          alert(data);
        } else {
          alert(data);
        }
      }
    )
    }
  })
})
