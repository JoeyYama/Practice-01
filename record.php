<?php
	//default is that the information submitted is invalid
	$valid = false;
	
	if ($_POST['name'] != "") {
        $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        if ($_POST['name'] == "") {
           $errors .= 'Please enter a valid name.<br/><br/>';
        }
    } else {
        $errors .= 'Please enter your name.<br/>';
    }
 
    if ($_POST['email'] != "") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
        }
    } else {
        $errors .= 'Please enter your email address.<br/>';
    }

	if ($_POST['comment'] != "") {
        $_POST['comment'] = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        if ($_POST['comment'] == "") {
           $errors .= 'Please enter a valid comment.<br/><br/>';
        }
    } else {
        $errors .= 'Please enter your comment.<br/>';
    }
	
	//If no errors detected, the data is considered valid
	if(strlen($errors) == 0) {
			$valid = true;
	}
	
	//Process information if valid
	if($valid) {
		//connect to database
		include('../db_connect.php');
		$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if($link->connect_error) {
			die('Connection Error: ' . $link->connect_error);
		}
		
		//insert the information into a database
		$stmt = $link->prepare("INSERT INTO comments (fullname, email, comment) VALUES (?,?,?)");
		$stmt->bind_param("ssb",$name, $email, $comment);
		$stmt->execute();
		
		//notify admin of comment submission
		$mail_to = 'kffweopfifpwf@yahoo.com';
		$subject = 'A comment was submitted to you';
		$message = $fullname . ' submitted a comment to you';
		mail($mail_to, $subject, $message);
		
		header("Location: index.php?page=thanks");
	} else {
		header("Location: index.php?page=error");
	}

?>