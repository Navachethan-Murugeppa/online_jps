<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jobportal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$job_type = mysqli_real_escape_string($link, $_REQUEST['job_type']);
$job_designation = mysqli_real_escape_string($link, $_REQUEST['job_designation']);
$job_company = mysqli_real_escape_string($link, $_REQUEST['job_company']);
$skills = mysqli_real_escape_string($link, $_REQUEST['skills']);
$experience = mysqli_real_escape_string($link, $_REQUEST['experience']);
$salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
 
// Attempt insert query execution
$sql = "INSERT INTO job (job_type, job_designation, job_company, skills, experience, salary, location) VALUES ('$job_type', '$job_designation', '$job_company', '$skills', '$experience', '$salary', '$location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>