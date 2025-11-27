<?php

include './DB.php';
session_start();


$des_emailz = $_SESSION["emailz"];

$row_skil = $_POST["skillnamez"];

$sqlz = "SELECT * FROM designerskills where designeremailz='$des_emailz' and skillname='$row_skil'";
$result = $conn->query($sqlz);

$echdata = "";

if ($result->num_rows > 0) {
    echo "alz";
} else {
    $sqlqq = "INSERT INTO `designerskills`
            (`designeremailz`,
             `skillname`)
VALUES ('$des_emailz',
        '$row_skil');";



    if ($conn->query($sqlqq) === TRUE) {

        echo "ok";
    } else {
        echo "Error: " . $sqlqq . "<br>" . $conn->error;
    }
}


