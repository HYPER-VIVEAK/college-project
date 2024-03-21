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
$u_name = $_POST["uname"];
$u_password = $_POST["psw"];
echo"<br>";
$sql = "select * from login where name = '$u_name' ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
                    $row=mysqli_fetch_assoc($result);
                    $key= $row["pass"];
                    if ($key == "$u_password") {
                        if($u_name == "admin"){
                        header("Location: admin.php");}else{ header("Location:staff.php") ;  }
                    }
                    else
                    {
                        header("Location: wrong.php");
                    }

} else {
    header("Location: wrong.php");
}


$conn->close();