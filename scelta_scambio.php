<?php
session_start();

include("connection.php");
include("functions.php");
include ("nav.php");

check_login($con);
?>
<br>
<br>
<center>
<h1>Scegli l'utente con cui fare lo scambio</h1>

<form action="scambio_carte.php" method="post">
<select name="persona_scambio">


<?php
$result=mysqli_query($con, "select u.user_name, u.user_id
from users u where u.user_id !=".$_SESSION['user_id'] );

while ($row = mysqli_fetch_array($result)) {

    echo '<option value="' . $row['user_id'] . '">' . $row['user_name'] . '</option>';
}
?>
</select>

<input id="button" type="submit" value="Scegli "/>

</form>
</center>