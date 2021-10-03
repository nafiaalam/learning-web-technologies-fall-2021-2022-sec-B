<?php
    if(isset($_POST['submit']))
    //checking name
    {
    	if(!empty($_POST['name'])&&strlen($_POST['name'])>2)
    	{
    		$name = $_POST['name'];
    		echo $name;
    	}
    	
    	else
    	{
            
    		echo "Must enter your name";
    	}

    }
?>




<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" >
		<table>
			<h1>Name</h1>
			<tr>
				<td>
			       <input type="text" name="name" pattern="[a-zA-Z][a-zA-Z-_/]+" value=""> <br><br>
			       <input type="submit" name="submit" value="Submit">
			    </td>
			</tr>      
		</table>
	</form>
</body>
</html>