<?php

include './DB.php';

session_start();

$desem = $_SESSION["emailz"];
$desname = $_SESSION["nameinfull"];


$row_id = $_POST["rowz"];
$sellerstat = "Accepted";
$intz_ratz = 10;

$sql = "update newprojectz set statusz='$sellerstat' where id='$row_id'";
$sql2 = "update sellerratingz set ratingz=ratingz+'$intz_ratz' where selleremailz='$desem'";
if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
