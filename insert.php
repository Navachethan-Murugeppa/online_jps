<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jobportal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$company_name = mysqli_real_escape_string($link, $_REQUEST['company_name']);
$company_type = mysqli_real_escape_string($link, $_REQUEST['company_type']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone_number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
 
// Attempt insert query execution
$sql = "INSERT INTO company (company_name, company_type, email, phone_number) VALUES ('$company_name', '$company_type', '$email', '$phone_number')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>