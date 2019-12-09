<?php

	session_start();

	$servername="localhost";
	$dbUsername="root";
	$dbPassword="Sandy#123";
	$dbName="rlife";
	
	$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
	
	if(!$conn)
	{
		die("Connection Failed:".mysqli_connect_error());
	}
	else
	{
		echo"Hello";
	}
?>