<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "database2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$class = mysqli_real_escape_string($link, $_GET['class']);
$assignment = mysqli_real_escape_string($link, $_GET['assignment']);
$dueDate = mysqli_real_escape_string($link, $_GET['dueDate']);

// attempt insert query execution
$sql = "INSERT INTO assignments (class, assignment, dueDate) VALUES ('$class', '$assignment', '$dueDate')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
