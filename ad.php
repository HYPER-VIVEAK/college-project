<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or 
    die("Connection failed: " . mysqli_connect_error());
    $name=$_POST["name"];
    $price=$_POST["price"];
    $image=$_POST["image"];
    $description=$_POST["description"]; 
    $sql="INSERT INTO card (name,price,image,description)  VALUES ('$name', '$price','$image','$description');";
    $conn->query($sql);
    $conn ->close();
    header("Location:alter.php") ;
     

   
    