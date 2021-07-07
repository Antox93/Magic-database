
<?php
session_start();

include("connection.php");
include("functions.php");
include ("nav.php");

check_login($con);

?>


<h1> benvenuto nel tuo profilo <?php  echo $_SESSION['user_name']; ?></h1>
<br>
<h2>la tua lista carte</h2>


<?php $result=mysqli_query($con, "select c.img
from carte c
join possessi p on p.id_card=c.id_carta
join users u on u.user_id=p.id_utente where u.user_id=".$_SESSION['user_id']);


while ($row = mysqli_fetch_array($result)) {
    echo '<img src="carte/' . $row['img'] . '">';
}
?>