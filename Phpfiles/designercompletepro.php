<?php

include './DB.php';




$row_id = $_POST["rowz"];
$sellerstat = "Completed";

$sql = "update newprojectz set statusz='$sellerstat' where id='$row_id'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
