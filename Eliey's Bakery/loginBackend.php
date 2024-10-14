<?php
$error = '';
echo "5";

if(isset($_POST['submit']))
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		$error = "Username or Password is Invalid";
	}
	else{

		$username=$_POST['username'];
		$password=$_POST['password'];

		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn, "bakery");

		$query = mysqli_query($conn, "SELECT * FROM customer WHERE password='$password' AND username='$username'");
		$rows = mysqli_num_rows($query);
		if($rows == 1)
		{
            // $_SESSION{'login'} = true;
			header("Location:bakery.html");
		}
		else
		{
			$error = "Username of Password is Invalid";
			header("Location: login.html");
            echo "5";

		}
		mysqli_close($conn);

	}
}
?>