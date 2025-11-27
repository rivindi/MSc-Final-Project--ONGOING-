<?php

include './DB.php';

$upname = $_POST["namez"];
$upcontactz = $_POST["contzt"];

$sqlz = "SELECT * FROM chatbot where queries='$upname'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {
        echo "Invalid";
    }
} else {
    $sql = "insert into chatbot(queries,replies) values ('$upname','$upcontactz')";
    if ($conn->query($sql) === TRUE) {

        echo "ok";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



