<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jobportal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$employee_name = mysqli_real_escape_string($link, $_REQUEST['employee_name']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee (employee_name, designation, email, company, location) VALUES ('$employee_name', '$designation', '$email', '$company', '$location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>