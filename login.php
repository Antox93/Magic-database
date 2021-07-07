<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") {

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {

                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['password'] === $password) {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        $_SESSION['user_name'] = $user_data['user_name'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo '<script>alert("password errata");</script>';
        } else {
            echo '<script>alert("alcuni campi sono vuoti");</script>';
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<title> login</title>
</head>
<body class="loginbody">

<br><br><br><br><br><br><br><br><br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: #1898BD;">LOGIN</div>

			<input id="text" type="text" name="user_name"><h1 class="usernamebox">USERNAME</h1><br><br>
			<input id="text" type="password" name="password"><h1 class="passwordbox">PASSWORD</h1><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Non sei ancora iscritto? Registrati!</a><br><br>
		</form>
	</div>

</body>

</html>