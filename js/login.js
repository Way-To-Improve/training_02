
function checkUser(){
var username = $('input#username').val();
var password = $('input#password').val();
var data = {
  function: 'checkUser',
  req : {
           username : username,
           password : password
  }
};

$.ajax({
    type: "POST",
    url: "../controller/loginController.php",
    data: data,
    async : false,
    dataType:'JSON',
    success: function(response){
      $('p#message').text(response.message);
      if(response.status == 'OK'){
        $('p#message').css("color","green");
      }else{
        $('p#message').css("color","red");
      }      
    },
    error: function(e) { 
      $('p#message').text(e);
    }

});
}
