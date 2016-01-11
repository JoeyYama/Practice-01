<?php
	//default is that the information submitted is invalid
	$valid = false;
	
	//extract the submitted information
	$email = $_POST['email'];
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	
	//Check the submitted information is valid
	if(strlen($email) > 0 && strlen($name) > 0 && strlen($comment)) { //check that all fields were filled out
		//check for valid e-mail submitted
		//check for unnecessary inputs
		//if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {
		//	break;
		//}
		
		//If all checks are ok, the data is valid
		$valid = true;
	}
	
	//Process information if valid
	if($valid) {
		//insert the information into a database
		//notify admin of comment submission
	}
	
	//redirect user back to contact page
	header("Location: index.php?page=contact");
?>