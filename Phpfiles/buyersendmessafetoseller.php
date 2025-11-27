<?php

include './DB.php';
session_start();

$buyer_emailz = $_SESSION["emailz"];
$buyer_nameinfull = $_SESSION["nameinfull"];



$row_sellername = $_POST["desname"];
$row_selleremail = $_POST["des_emailz"];
$row_messagez = $_POST["message"];
$row_sgigref = $_POST["reffidz"];
$row_subject = $_POST["subjec"];



$messagestatz = "notread";

$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');


$sqlqq = "INSERT INTO `messages_employer_to_designer`
            (`employeremail`,
             `employername`,
             `designerrname`,
             `designeremail`,
             `messagez`,
             `datez`,
             `timez`,
             `subject`,
             `reffidz`,
             `statuz`)
VALUES (
        '$buyer_emailz',
        '$buyer_nameinfull',
        '$row_sellername',
        '$row_selleremail',
        '$row_messagez',
        '$todaydate',
        '$todaytime',
        '$row_subject',
        '$row_sgigref',
        '$messagestatz');";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}