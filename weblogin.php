<?php

$servername = "localhost"; 
$username = "root"; 
$password = "Nilu@123"; 
$dbname = "website"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$u_name = $_POST['UserName'];
$login_id = $_POST['LoginId'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$phonenumber = $_POST['MobileNumber'];


$sql = "INSERT INTO weblogin (UserName, LoginId, Email, Password, MobileNumber) VALUES ('$u_name', '$login_id', '$email', '$password', '$phonenumber')";
if ($conn->query($sql) === TRUE) 
{
    echo "<script>alert('Login Successful!');</script>";
} 
else 
{
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
}

// Close connection
$conn->close();
?>
