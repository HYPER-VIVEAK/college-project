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
$sql="INSERT INTO service (name,phone,genset,service) VALUES ('$name','$phone','$genset','service');";
$conn->query($sql);
header("Location: https://docs.google.com/forms/d/e/1FAIpQLSdF7M3BSFtCh8QKpmfDwUkWrasuTpN_g2HOq8qrXcwnRUL3HA/viewform?usp=sf_link");
 $conn->close();  