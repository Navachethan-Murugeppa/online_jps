<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jobportal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$eemail = mysqli_real_escape_string($link, $_REQUEST['eemail']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
 
// Attempt insert query execution
$sql = "INSERT INTO interview (name, eemail, company, location, date, time) VALUES ('$name', '$eemail', '$company', '$location', '$date', '$time')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>