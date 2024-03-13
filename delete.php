<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or 
    die("Connection failed: " . mysqli_connect_error());
    $id=$_POST["id"];
    $sql="DELETE FROM login WHERE id='$id';";
    $conn->query($sql);
    $conn ->close();
    header("Location:staffmanage.php") ;