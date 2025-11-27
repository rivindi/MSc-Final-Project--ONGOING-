<?php

include './DB.php';
session_start();
$upload_path = 'gigthumimg/';


$des_id = $_SESSION["user_id"];
$des_name = $_SESSION["nameinfull"];
$des_emailz = $_SESSION["emailz"];



$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');

$titlez = $_POST["p1"];
$pricez = $_POST["p2"];
$tagz = $_POST["p3"];
$desz = $_POST["p4"];
$cato = $_POST["p5"];
$stt = "posted";

if ($cato == "None") {
    echo 'empty';
} else if ($titlez == "") {
    echo 'empty';
} else if ($pricez == "") {
    echo 'empty';
} else if ($tagz == "") {
    echo 'empty';
} else if ($desz == "") {
    echo 'empty';
} else {


    $digits = 3;
    $numberrand = rand(pow(10, $digits - 1), pow(10, $digits) - 1);



    $file_name = $_FILES['thumbimage']['name'];
    if ($file_name == "") {

        echo 'imageone';
    } else {


        try {

            $file_name = $_FILES['thumbimage']['name'];
            $file_size = $_FILES['thumbimage']['size'];
            $file_tmp = $_FILES['thumbimage']['tmp_name'];
            $file_type = $_FILES['thumbimage']['type'];
            $filenewz = $des_emailz . $file_name;
            move_uploaded_file($file_tmp, "gigthumimg/" . $filenewz);

            $fileekepatheka = "gigthumimg/" . $filenewz;

            $characters = '123456789';
            $charactersLength = strlen($characters);
            $length = 5;
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            $orderidgen = "GIG" . $randomString;


            $sqlll = "INSERT INTO `designerpostitem`
            (
             `gigtitle`,
             `gigprice`,
             `gigtags`,
             `gigdesc`,
             `catoz`,
             `imgurl`,
             `datez`,
             `timez`,
             `designerid`,
             `designernamez`,
             `designeremailz`,
             `statusz`,
             `ranidz`)
             
VALUES (
        '$titlez',
        '$pricez',
        '$tagz',
        '$desz',
        '$cato',
        '$fileekepatheka',
        '$todaydate',
        '$todaytime',
        '$des_id',
        '$des_name',
        '$des_emailz',
        '$stt',
        '$orderidgen');";
            if ($conn->query($sqlll) === TRUE) {

                echo "ok";
            } else {
                echo "Error: " . $sqlll . "<br>" . $conn->error;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}





