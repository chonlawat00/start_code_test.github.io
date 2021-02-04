<?php 
	$conn = mysqli_connect("localhost","root","","186fff");

	if ($conn){
		echo "Connect!";
	}
	else
	{
	    die('Could not connect: ' . mysqli_error());
	}
?>