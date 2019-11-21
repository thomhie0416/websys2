<?php
  
  if(isset($_REQUEST["lastname"]) || isset( $_REQUEST["Age"])|| isset($_REQUEST["pass"]))
    
    if (preg_match("/[^A-Za-z'-]/",$_REQUEST['pass'])){
    
      echo "Welcome".$_REQUEST['lastname']."<br/>";
  	  echo "You are ".$_REQUEST['Age']."years old <br/>";
     echo "My password".$_REQUEST['pass']."this is securred.";

  }
else{
  die ("Password complexity does not meet.Your password must contain 1 uppercase and 1 lowercase and 1 number");
}

?>

