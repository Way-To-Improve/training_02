<?php
/*
 This code belongs to Way To Improve(W2I)
*/
 namespace model;
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
    include('..\config\db_connect.php');
  	$sql = <<<EOD
  	select
  	* from users
  	where
  	Name = :name and Password = :pwd
EOD;
  	$result = $conn->prepare($sql);
    $result->bindValue(':name', $username);
    $result->bindValue(':pwd', $password);
    $result->execute();
  	if($result->rowCount() > 0){
  		return true;
  	}else{
  		return false;
  	}
  }
}
?>
