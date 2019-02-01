<?php
/*
 This code belongs to Way To Improve(W2I)
*/
 namespace model;
 include('../config/db_connect.php');
/**
 *
 */
class loginModel
{
  /**
 *  to check user login
 * @param   string
 * @return  boolean
 */
  public function checkUser($username,$password)
  {
  	$sql = <<<EOD
  	select 
  	count(*) from users 
  	where 
  	Name = $username and Password = $password
EOD;
  	$count = $conn->query($sql);
  	if($count == 1){
  		return true;
  	}else{
  		return false;
  	}
  }
}
?>
