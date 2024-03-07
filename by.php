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
$genset = $_POST["genset"];
$sql="INSERT INTO service (name,phone,genset,service) VALUES ('$name','$phone','$genset','selling');";
$conn->query($sql);
header("Location: https://docs.google.com/forms/d/e/1FAIpQLSdrGBbLRAHbtYDNt4GoBOOItf3pl6DpJ8OpnmmXdsLI6gBHlQ/viewform?usp=sf_link");
 $conn->close();  