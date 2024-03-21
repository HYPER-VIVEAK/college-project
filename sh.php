<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$phone = $_POST["phone"];
$genid = $_POST["genid"];
$sql="INSERT INTO service (name,phone,genset,service,genid) VALUES ('$name','$phone','$genset','buy_request','$genid');";
$conn->query($sql);
$conn->close(); 
header("Location: https://forms.gle/W5yquxNw9A7SsJ1w5");
