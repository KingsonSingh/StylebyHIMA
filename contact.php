<?php

    require 'connections.php';
    $conn    = Connect();
	$email=$_POST["email"];
	$name=$_POST["name"];
    $profession=$_POST["profession"];
    $area=$_POST["area"];
    $age=$_POST["age"];
	$phone=$_POST["phone"];
    $message=$_POST["message"];
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp,$email))
    {
        
        echo 'Please enter a valid email address.';
 header("location:index.html");
        die;
    } 
 
	$query="INSERT into contact(email,name,profession,area,age,phone,message) VALUES('". $email ."','". $name ."','". $profession ."','". $area . "','". $age ."','". $phone ."','". $message ."')";
	$success = $conn->query($query);
	
	if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
 header("location:index.html");
$conn->close();
 
?>