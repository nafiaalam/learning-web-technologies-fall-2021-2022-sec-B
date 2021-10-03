<?php
   if(isset($_POST['submit'])){

     $bloodGroup = $_POST['bloodGroup'];
    	echo $bloodGroup;
   }
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Blood Group</title>
</head>
<body>
     <fieldset style="width:200px">
     	 <legend>Blood Group</legend>
        <form method="post">    
           
            <select name="bloodGroup" >
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+" selected>O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
           <input type="submit" name="submit"value="submit">
        </form>
     </fieldset>
</body>
</html>