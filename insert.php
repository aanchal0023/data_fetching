<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT * FROM formdata ORDER BY id DESC");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
	.container{
	
	}
	.container-fluid{
		background-color: orange;
		width: 100%;	
		}
   		
    .column{
    	float: left;
        width: 35%;
    }
    .row{
    	width: 100%;
    }
</style>
<body>
	<form action="function.php" method="POST">
		<h3 style="text-align: center;"> Data Form</h3><br>
		<div class="row">
			<div class="column"></div>
			<table border="0">
		
			<tbody><tr>
				
				<td style="padding-left: 15px;"><b>Name:</b></td></tr>
		<tr><td style="padding-left: 15px;"><input type="text" name="name" placeholder="Name" size="60"><br></td></tr>
		<tr><td style="padding-left: 15px;"><b>City:</b></td></tr>
		<tr><td style="padding-left: 15px;"><input type="" name="city" placeholder="City" size="60"><br></td></tr>
		<tr><td style="padding-left: 15px;"><b>Occupation:</b></td></tr>
		<tr><td style="padding-left: 15px;"><input type="" name="occupation" placeholder="Occupation" size="60"><br></td></tr>	
		<tr>
			<td></td></tr>
			<tr><td style="padding-left: 15px;"><input type="submit" name="submit" style="background-color:#00cc00; color: white;"></td></tr>
	</form></tbody></table></div>
	<div class="container">
	<table border="1" rules="rows"><br>
				<h4 style="text-align: center; background-color:#000099; color: white;">Result Data</h4>
		<tr style="border-bottom: 1px solid black; border-top:1px solid black;">
			<th style="width:375px;" > Name</th>
			<th style="width:375px;">City</th>
			<th style="width:375px;">Occupation</th>
		</tr>

<?php
while($res=mysqli_fetch_array($result)){
	echo '<tr>';
	echo '<td>'.$res['name'].'</td>';
	echo '<td>'.$res['city'].'</td>';
	echo '<td>'.$res['occupation'].'</td>';

	echo '</tr>';
}
?>
</table></div>

</body>
</html>
