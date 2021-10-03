<?php
   if(isset($_POST['submit'])){
   	  $name = $_POST['email'];
   	  echo $name;
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method = "POST">
		<fieldset >
			<legend>Email Input</legend>
			<input type="text" name="email" value="">
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>