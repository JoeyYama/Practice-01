<div class="row">
	<?php 
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'about':
				include('section/about.html');
				break;
				case 'contact' :
				include('section/contact.html');
				break;
				default:
				include('section/home.html');
			}
		} else {
			include('section/home.html');
		}
	?>
</div>