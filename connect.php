<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database="assignmentsub";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




mysqli_select_db($conn,' assignmentsub');


if(isset($_POST['submit']))
{
	$filename = $_FILES['myfile']['name'];
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	$file=$_FILES['myfile']['tmp_name'];
	$destination = 'uploads/' . $filename;
	$size=$_FILES['myfile']['size'];
	$username=$_POST['username'];
    $registerno=$_POST['registerno'];

	if(!in_array($extension,['zip','pdf','docx']))
	{
		echo "File extension must be in pdf,docx or zip";
	}
	elseif ($_FILES['myfile']['size']>10000000)
	 {
		echo "Maximum file size must be 1MB";
	}
	else
	{
		 if (move_uploaded_file($file, $destination))
		{
			$query= "INSERT INTO sub(username,registerno,name,size,downloads) 
                 VALUES ( '$username',$registerno,'$filename',$size,0)";
                 
            if(mysqli_query($conn,$query))
            {
            	  
            	echo "File Uploaded";
            }
		}
		else{
			echo "Failed to upload!!Try again";
		}


	}

}





?>