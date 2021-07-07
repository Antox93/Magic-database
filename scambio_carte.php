<?php
session_start();

include("connection.php");
include("functions.php");
include ("nav.php");

check_login($con);

$persona_scambio = $_POST['persona_scambio'];
$_SESSION['persona_scambio'] = $persona_scambio;


?>
<center>
    <h1 id="titolo_scambi"> Scegli le carte da scambiare</h1>
<p>CARTE POSSEDUTE  </p>
<form action="esegui_scambio.php" method="post">
<select name="carta_scambio_1">

    <?php
$result=mysqli_query($con, "select c.nome_carta, c.id_carta
from carte c
join possessi p on p.id_card=c.id_carta
join users u on u.user_id=p.id_utente where u.user_id=".$_SESSION['user_id']);

while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row['id_carta'] . '">'.$row['nome_carta'] . '</option>';
}
?>
</select>
    <br><br>
    <p>CARTE UTENTE SCELTO</p>

<select  name="carta_scambio_2">
<?php  
$result=mysqli_query($con, "select c.nome_carta, c.id_carta
from carte c
join possessi p on p.id_card=c.id_carta
join users u on u.user_id=p.id_utente where u.user_id=".$_SESSION['persona_scambio']);

while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row['id_carta'] . '">'.$row['nome_carta']. '</option>';
}
?>
</select>
    <br><br>
<input id="button" type="submit" value="Scambia">
</form>
</center>