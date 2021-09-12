<?php
if(isset($_POST['login']))
{
$servername='localhost';
$username='root';
$pass='';
$database_name= 'register';
$conn=mysqli_connect($servername,$username,$pass,$database_name);
if(!$conn)
{
    die("Connection Failed:". mysqli_connect_error());
}
else{
    
    echo'database connection successfully.';
}
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "SELECT * from registration where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						header("Location:student_index.php");
						die;
					}
				}
			}
			
			echo "Wrong Email or password!";
		}else
		{
			echo "Wrong Email or password!";
		}
	}
}

?>