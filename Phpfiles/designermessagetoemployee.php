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


$sqlqq = "INSERT INTO `messages_designer_to_employer`
            (`designername`,
             `designeremail`,
             `employername`,
             `employeremail`,
             `messagez`,
             `datez`,
             `status`,
             `timez`,
             `subjectz`)
VALUES (
        '$buyer_nameinfull',
        '$buyer_emailz',
        '$row_sellername',
        '$row_selleremail',
        '$row_messagez',
        '$todaydate',
        '$messagestatz',
        '$todaytime',
        '$row_subject');";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}