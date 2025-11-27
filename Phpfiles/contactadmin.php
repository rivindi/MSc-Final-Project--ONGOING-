<?php

include './DB.php';
session_start();
$emp_id = $_SESSION["user_id"];
$emp_name = $_SESSION["nameinfull"];
$emp_emailz = $_SESSION["emailz"];


$review_comment = $_POST["namez"];


$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$sqlloadz = "INSERT INTO `usersendmessagetoadmin`
            (`sentuseremail`,
             `sentusername`,
             `messagez`,
             `datez`,
             `timez`)
VALUES ('$emp_emailz',
        '$emp_name',
        '$review_comment',
        '$todaydate',
        '$todaytime');";

$intvalofrat = (int) $rating_countz;


if ($conn->query($sqlloadz) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlloadz . "<br>" . $conn->error;
}

$conn->close();
