<?php
include("connection.php");
include ("nav.php");

$result=mysqli_query($con, "SELECT img From carte c  ");


while ($row = mysqli_fetch_array($result)) {
    echo '<img src="carte/' . $row['img'] . '">';
}
?>