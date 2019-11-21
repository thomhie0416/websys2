<?php
		if(isset($_REQUEST["lastname"]) || isset($_REQUEST["age"]) || isset($_REQUEST["pass"])) {
			if (preg_match("/[^A-Za-z'-]/",$_REQUEST ['pass'])) {
				
		
			echo "Welcome ".$_REQUEST['lastname']."<br/>";
			echo "Your are ".$_REQUEST['age']." years old ";
			echo "My password ".$_REQUEST['pass']." this is secured ";
		}
		else
		{
		die("Dapat imong Password kay upper og Lower case");
	}
}
?>
