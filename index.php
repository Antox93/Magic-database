<?php 
session_start();

	include("connection.php");
	include("functions.php");
	include ("nav.php");

	check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME MTG</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
<h1 class="bentornato"> bentornato <?php  echo $_SESSION['user_name']; ?></h1>
    <center>
        <h1 class="titolo">CARTE ULTIMA ESPANSIONE</h1>
        <button  class="buttons" onclick="avanti()">
            avanti

            <i class="fas fa-arrow-alt-circle-right"></i>
        </button>

     <img id="slider" src="slider/photo(1).jpg" height="680">

        <button  class="buttons" onclick="indietro()">

            <i class="fas fa-arrow-alt-circle-left"></i>
            indietro
        </button>
    </center>


</body>
<script>
    var immagine=1;
    function avanti(){

        immagine++;
        if (immagine >6)
            immagine=1;

        document.getElementById("slider").src="slider/photo("+immagine+").jpg";
    }
    function indietro(){
        immagine--;
        if (immagine <1)
            immagine=6;
        document.getElementById("slider").src="slider/photo("+immagine+").jpg";
    }

</script>

</html>