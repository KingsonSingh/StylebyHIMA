<?php
	$email=$_POST["email"];
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$message=$_POST["message"];
	
	$conn=mysqli_connect("localhost","root","","test");
	
	if (mysqli_connect_errno())
		{
			echo "<script>alert('Failed to connect to MySQL:  . mysqli_connect_error()');
						window.location.href='index.html'</script>";
	    }
 
	$query="insert into contact(email,name,mobile,message) values('$email','$email','$phone','$message')";
	$result=mysqli_query($conn,$query);
	
	if(!$result)
	{
		
		mysqli_close($conn);
		echo "<script> alert('You are all ready register with us...!');
			window.location.href='tables.html'</script>";
	}
	else
	{
		mysqli_close($conn);
		
		echo "<script>alert('Thank You! We will give you a call soon!!');
		window.location.href='tables.html'</script>";

	}	

?>