<?php 
	include('record.php');
	if(isset($thanks)) {
		echo '<p>'.$thanks.'</p><br/>';
	} else if(isset($err_msg) > 0) {
		echo '<p>'.$err_msg.'</p><br/>';
	}
?>
<div class="col-sm-12">
	<div class="title">
	<h1>Contact Form</h1>
	</div>
</div>

<div class="col-sm-12">
	<form action="index.php?page=contact" method="post">
		<div class="row">
			<div class="col-sm-6 label_field"><label>Your Name</label></div>
			<div class="col-sm-6 input_box"><input type="text" name="name" size="25" required autofocus /></div>
		</div>
		<div class="row">	
			<div class="col-sm-6"><label>E-mail</label></div>
			<div class="col-sm-6"><input type="email" name="email" size="35" required /></div>
		</div>
		<div class="row">
				<div class="col-sm-6 label_field"><label>Comment</label></div>
				<div class="col-sm-6 input_box"><textarea name="comment" cols="37" required></textarea></div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2"><input name="submit" type="submit" value="Submit" /></div>
		</div>
	</form>
</div>