<?php

include './DB.php';
session_start();


$buyer_emailz = $_SESSION["emailz"];
$buyer_nameinfull = $_SESSION["nameinfull"];
$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$row_sellername = $_POST["designername"];
$row_selleremail = $_POST["designeremail"];
$row_proid = $_POST["projectid"];
$row_protitle = $_POST["projecttitle"];
$row_procost = $_POST["projectcost"];
$row_prodeadlinez = $_POST["finaldatez"];
$row_prostat = "Pending";

$sqlqq = "INSERT INTO `newprojectz`
            (`projecttitlez`,
            `cost`,
             `employername`,
             `empemailz`,
             `desigername`,
             `designeremaizl`,
             `proid`,
             `datez`,
             `timez`,
             `deadlienrz`,
             `statusz`)
VALUES (
        '$row_protitle',
        '$row_procost',
        '$buyer_nameinfull',
        '$buyer_emailz',
        '$row_sellername',
        '$row_selleremail',
        '$row_proid',
        '$todaydate',
        '$todaytime',
        '$row_prodeadlinez',
        '$row_prostat');";
if ($conn->query($sqlqq) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sqlqq . "<br>" . $conn->error;
}

