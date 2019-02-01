<?php
  /*
   This code belongs to Way To Improve(W2I)
  */
  namespace controller;
  include('..\model\searchModel.php');
  use model\searchModel as search;


 //to check funtion name & request data from js
  if(isset($_POST['function'])){
    $functionName = $_POST['function'];
    switch($functionName){
      case 'searchItem':
        if(isset($_POST['req'])){
          searchItem($_POST['req']);
        }else {
          echo json_encode(array(
            'status'  => 'NG',
            'message' => 'Invalid Argument'));
        }
      break;
      default:
      echo json_encode(array(
        'status'  => 'NG',
        'message' => 'There is no such a function'));
      break;
    }
  }else{
    echo json_encode(array(
      'status'  => 'NG',
      'message' => 'No function is set'));
  }

  /**
 * @param   array
 * @return  array
 */
function searchItem($req){
  
    $pname = $req['pname'];
    $price = $req['price'];
    
      $search = new search();
      $result = $search->searchItem($pname,$price);
      if($result){
        echo $result;
      }
      else{
        echo $result;
      }
      
  
}


?>
