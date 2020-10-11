<?php

include("config.php");
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$city=$_POST['city'];
		$occupation=$_POST['occupation'];

		$result=mysqli_query($mysqli, "INSERT into formdata values('', '$name', '$city', '$occupation')");
		if($result)
		{
			header("location:insert.php");
		}
		else{
			echo " failed";
		}
	}


	?>