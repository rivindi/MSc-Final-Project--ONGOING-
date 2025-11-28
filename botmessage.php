<?php
// connecting to database
$conn = mysqli_connect("localhost:3306", "root", "", "freelancer") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");


if(mysqli_num_rows($run_query) > 0)
{
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
}
else
{
    echo "Sorry! I am unable to understand what you have said. ";
}

?>