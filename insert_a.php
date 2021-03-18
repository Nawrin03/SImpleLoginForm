<?php
extract($_POST);
include("database.php");


 $sql = "INSERT INTO user (email,password) VALUES ('$email', '$password')";
 if(mysqli_query($link, $sql)){
    header ("Location: index.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>