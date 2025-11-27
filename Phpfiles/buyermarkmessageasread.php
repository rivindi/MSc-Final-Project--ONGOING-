<?php

include './DB.php';



$row_id = $_POST["rowz"];
$sellerstat = "read";

$sql = "update messages_employer_to_designer set statuz='$sellerstat' where id='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}