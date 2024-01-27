<?php
if(isset($_POST['button']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbs";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
$mail=$_POST['email'];
$password=$_POST['password'];
$sqlquery = "INSERT INTO enews VALUES('$mail','$password')";
if ($conn->query($sqlquery) === TRUE) {
    header("location:login.php");
}
}
?>