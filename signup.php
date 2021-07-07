<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Qualcosa è stato postato
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//salva dentro il database
			$user_id = rand();
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
            echo '<script>alert("inserisci delle informazioni valide");</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body class="loginbody">

<br><br><br><br><br><br><br><br><br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: #1898BD;">SIGN-UP</div>

			<input id="text" type="text" name="user_name"><h1 class="usernamebox">USERNAME</h1><br><br>
			<input id="text" type="password" name="password"><br><h1 class="passwordbox">PASSWORD</h1><br>

			<input id="button" type="submit" value="Signup"><br><br>

			 <a href="login.php">Già registrato? Clicca qui per il Login</a><br><br>
		</form>
	</div>
</body>
</html>