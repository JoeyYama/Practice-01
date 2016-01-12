<div class="row content">
	<?php 
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'about':
				include('section/about.html');
				break;
				case 'contact' :
				include('section/contact.php');
				break;
				case 'thanks':
				include('section/thanks.html');
				break;
				case 'error':
				include('section/error.html');
				break;
				default:
				include('section/home.html');
			}
		} else {
			include('section/home.html');
		}
	?>
</div>