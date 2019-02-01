<?php
/*
 This code belongs to Way To Improve(W2I)
*/
namespace model;
include('../config/config.php');
/**
 *
 */
class searchModel
{
  /**
 
 * @param   string
 * @return  boolean
 */
  public function searchItem($pname,$price)
  { 

  	if(strlen($pname)<=20 && strlen($price)<=20){

  	    if($pname == '' && $price == ''){
           return json_encode(array(
           'message' => 'Show all data.'));
        }
        else if($pname == ''){
   	       return json_encode(array(
           'message' => 'Show all data which are equal to searched price.'));
        }
        else if($price == ''){
    	   return json_encode(array(
           'message' => 'Show all data which are equal to searched product name.'));
        }
        else{
            if (!is_numeric($price)){
  		        return json_encode(array(
                'message' => 'Price must be numeric.'));
        
  	        }
    	    return json_encode(array(
            'message' => 'Show data which is equal to searched name and price.'));
        }
    }
    else{
  	    return json_encode(array(
        'message' => 'Product name and price length must not exceed 20.'));
    }
  }
}
?>
