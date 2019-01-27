
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
    dataType:'JSON',
    success: function(response){
        console.log(response);
    },
    error: function(e) { console.log(e) }

});
}
