<?php
   
   $gender="";


   if(isset($_POST['submit'])){

     if(!empty($_POST['gender']))
     {
        $gender = $_POST['gender'];
        echo $gender;
     }
     else
     {
      echo "At least one of the gender has to be selected";
     }


     
   }
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Gender</title>
</head>
<body>
    <fieldset style="width:200px">
       <legend>Gender</legend>
        <form method="POST">  
            <input type="radio" name="gender" value="Male"<?php if($gender=='Male'){print'checked';}?>> Male
                  <input type="radio" name="gender" value="Female" <?php if($gender=='Female'){print'checked';}?>> Female
                  <input type="radio" name="gender" value="Other" <?php if($gender=='Other'){print'checked';}?>> Other <br>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>       
</body>
</html>