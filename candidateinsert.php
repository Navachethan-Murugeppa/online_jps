<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jobportal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$candidate_name = mysqli_real_escape_string($link, $_REQUEST['candidate_name']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$university = mysqli_real_escape_string($link, $_REQUEST['university']);
$experience = mysqli_real_escape_string($link, $_REQUEST['experience']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$skill = mysqli_real_escape_string($link, $_REQUEST['skill']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
 
// Attempt insert query execution
$sql = "INSERT INTO candidate (candidate_name, dob, age, gender, university, experience, email, phone_number, skills, location ) VALUES ('$candidate_name', '$dob', '$age', '$gender', '$university', '$experience', '$email',  '$phone', '$skill','$location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>