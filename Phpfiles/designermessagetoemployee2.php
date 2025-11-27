<?php

include './DB.php';
session_start();

$buyer_emailz = $_SESSION["emailz"];
$buyer_nameinfull = $_SESSION["nameinfull"];



$row_sellername = $_POST["employername"];
$row_selleremail = $_POST["emoployermail"];
$row_messagez = $_POST["asdasd"];
$row_subject = $_POST["subzads"];



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
        '$messagestatz');";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}