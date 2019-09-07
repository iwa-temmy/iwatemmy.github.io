<?php 
		if(isset($_POST['submit'])){
			$Name = $_POST['name'];
			$Email = $_POST['email'];
			$Message = $_POST['message'];

			$myfile = fopen("contact.txt", "w") or die("Unable to open file!");
			fwrite($myfile, $Name);
			fwrite($myfile, $Email);
			fwrite($myfile, $Message);
			fclose($myfile);
		}
	?>