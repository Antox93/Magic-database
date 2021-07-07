<?php
session_start();

include("connection.php");
include("functions.php");
include ("nav.php");

check_login($con);

$carta_scambio_1 = $_POST['carta_scambio_1'];
$carta_scambio_2 = $_POST['carta_scambio_2'];
$persona_scambio = $_SESSION['persona_scambio'];
$possesso1 = mysqli_query($con,"SELECT id FROM possessi where id_utente=" .  $_SESSION['user_id'] . " and id_card =" . $carta_scambio_1);
$possesso2 = mysqli_query($con,"SELECT id FROM possessi where id_utente=" .  $persona_scambio . " and id_card =" . $carta_scambio_2);
$row1 = mysqli_fetch_assoc($possesso1);
$row2 = mysqli_fetch_assoc($possesso2);
$esito=0;
if (mysqli_query($con,"UPDATE possessi set id_card=" . $carta_scambio_1 . " where id=" . $row2['id'])) {
    if (mysqli_query($con,"UPDATE possessi set id_card=" . $carta_scambio_2 . " where  id=" . $row1['id'])) {
        $esito = 1;
    }
}
 if($esito === 1) {
    echo '<script>alert("scambio avvenuto con successo");</script>';
    echo '<a href="scelta_scambio.php">Torna agli scambi</a>';
     $_SESSION['persona_scambio']=NULL;
 }else {
     echo '<script>alert("scambio non avvenuto");</script>';
     echo '<a href="scelta_scambio.php">Torna agli scambi </a>';
     $_SESSION['persona_scambio']=NULL;
 }
?>
