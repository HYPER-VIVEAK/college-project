<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or 
    die("Connection failed: " . mysqli_connect_error());
    $name=$_POST["name"];
    $password=$_POST["password"];
    $password2=$_POST["password2"];
    if($password == $password2) {
    $sql="INSERT INTO login (name, pass)  VALUES ('$name', '$password2');";
    $conn->query($sql);
    $conn ->close();
    header("Location:staffmanage.php") ;
    }else{
        ?>script type="text/javascript"> 
    alert('enter correctly'); 
</script>
    <?php } ?>
    