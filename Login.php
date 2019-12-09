<?php

	if(isset($_POST['login']))
	{
		$servername="localhost";
		$dbUsername="root";
		$dbPassword="Sandy#123";
		$dbName="rlife";
		
		$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
		
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}
			
		
		$userid=$_POST['id'];
		$userpass=$_POST['pass'];
		
		if(empty($userid) || empty($userpass))
		{
			header("Location:.../home.php?error=emptyfields");
			exit();
		}
		else
		{
			$sql="SELECT * FROM login WHERE ID=? OR PASSWORD=?;";
			$stmt=mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location:.../login.php?error=sql_error");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt,"ss",$userid,$userid);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
				if($row=mysqli_fetch_assoc($result))
				{
					$pwdcheck=password_verify($userpass,$row['PASSWORD']);
					if($pwdcheck == false)
					{
						header("Location:.../login.php?error=wrongPWD");
						exit();	 
					}
					else if($pwdcheck == true)
					{						
						session_start();
						$_SESSION['uid']=$row['ID'];
						$_SESSION['upass']=$row['PASSWORD'];
						
						echo"<a href='http://localhost/sandeep/Rlife/php/Admin.php'></a>";
					}
				}
				else
				{
					header("Location:.../login.php?error=no_user");
					exit();
				}
			}
		}
	}
				
?>