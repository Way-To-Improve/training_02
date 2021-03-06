<?php
  /*
   This code belongs to Way To Improve(W2I)
  */
  namespace controller;
  include('..\model\loginModel.php');
  use model\loginModel as login;
 //to check funtion name & request data from js
  if(isset($_POST['function'])){
    $functionName = $_POST['function'];
    switch($functionName){
      case 'checkUser':
        if(isset($_POST['req'])){
          checkUser($_POST['req']);
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
 *  to check user login
 * @param   array
 * @return  array
 */
function checkUser($req){
  if($req != [] ){
    $username = $req['username'];
    $password = $req['password'];
    if($username != '' && $password != ''){
      $login = new login();
      $result = $login->checkUser($username,$password);
      if($result){
        $status = 'OK';
        $message = 'Success';
      }else {
        $status = 'NG';
        $message = 'Fail To Login';
      }
    }else{
      $status = 'NG';
      $message = 'Enter Values';
    }
  }else {
    $status = 'NG';
    $message = 'No Request from View';
  }
  echo json_encode(array(
    'status'  => $status,
    'message' => $message
  ));
}


?>
