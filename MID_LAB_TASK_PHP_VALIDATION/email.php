<?php
   if(isset($_POST['submit'])){
   	  
        if(!empty($_POST['email']))
        {
        	$email = $_POST['email'];
   	        echo $email;
        }
        else
        {
        	echo "Enter your email address. Cannot be empty";
        }
   	  
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method = "POST">
		<table>
			<h1>Email Input</h1>
			 <tr>
			 	<td>
			      <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value=""><br><br>
			     <input type="submit" name="submit" value="Submit">
		        </td>
		     </tr>   
		</table>
	</form>

</body>
</html>