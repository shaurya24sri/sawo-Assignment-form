<?php include 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  
   <div class="form-div">
   <h1>Submission Form</h1>
<form  method="post" enctype="multipart/form-data" >
         <label>Name</label>
            <input type="text" name="username" required="true">
            <br><br>
            <label>Register no</label>
            <input type="text" name="registerno" required="true" >
            <br><br>
          <h3>Upload Submission</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="submit">upload</button>
</form>


</div>




</body>
</html>