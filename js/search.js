
function searchItem(){
var pname = $('input#pname').val();
var price = $('input#price').val();
var data = {
  function: 'searchItem',
  req : {
           pname : pname,
           price : price
  }
};
$.ajax({
    type: "POST",
    url: "../controller/searchController.php",
    data: data,
    dataType:'JSON',
    success: function(response){
        console.log(response);
    },
    error: function(e) { console.log(e) }

});
}
