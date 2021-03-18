<?php
    extract($_POST);
    include 'database.php';
    $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
	$result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){
       
		header ("Location: welcome.html");
	}
    else
	{
        header ("Location: error.html");
    }
 


?>