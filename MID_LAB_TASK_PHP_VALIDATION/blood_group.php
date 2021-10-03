<?php
     $bloodGroup="";
   if(isset($_POST['submit'])){

     if(!empty($_POST['bloodGroup']))
     {
      $bloodGroup = $_POST['bloodGroup'];
    	echo $bloodGroup;
     }
     else
     {
      echo "Blood Group Must be selected";
     }

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
              <option value=></option>
				<option value="A+" <?php if($bloodGroup=="A+"){print 'selected';}?>>A+</option>
				<option value="A-" <?php if($bloodGroup=="A-"){print 'selected';}?>>A-</option>
				<option value="B+" <?php if($bloodGroup=="B+"){print 'selected';}?>>B+</option>
				<option value="B-"<?php if($bloodGroup=="B-"){print 'selected';}?>>B-</option>
				<option value="AB+"<?php if($bloodGroup=="AB+"){print 'selected';}?>>AB+</option>
				<option value="AB-"<?php if($bloodGroup=="AB-"){print 'selected';}?>>AB-</option>
				<option value="O+" <?php if($bloodGroup=="O+"){print 'selected';}?>>O+</option>
				<option value="O-"<?php if($bloodGroup=="O-"){print 'selected';}?>>O-</option>
			</select>
			<hr>
           <input type="submit" name="submit"value="submit">
        </form>
     </fieldset>
</body>
</html>