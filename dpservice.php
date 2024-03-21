<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or 
    die("Connection failed: " . mysqli_connect_error());
    $sql = "SELECT id, name, phone, genset,service,genid  FROM service";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->      
    <link rel="script" href="java.js">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
table, th, td {
  border: 1px solid black;
  padding: 7px;
  size-adjust: center;
  margin-left: auto;
  margin-right: auto;
  font-size: 26px;
  font-weight: bolder;
}
</style>
</head>
<body>
 <!-- Header --> 
<div class="header">  
  <div class="banner">
          <img  src="images/final.png" class="logo" alt="">
    
           <div class="nav">
       
               <a href="shop.php"><button style="margin-left: 30px;" class="bu" > Shop </button></a>
              <a href="buy.php"><button class="bu" > sell </button></a>
              <a href="contactus.php"><button class="bu" > Contact </button></a>
              <a href="index.php"><button class="bu" style="margin-right: 30px;"> Home </button></a>

            </div>
</div >
<div style="margin-top:30px" ><table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>genset</td>
        <td>service</td>
        <td>genid</td>
    </tr>
<?php 
while( $record = mysqli_fetch_assoc($resultset) ) {?>
    <tr>
        <td><?php echo $record['id'];?></td>
        <td><?php echo $record['name'];?></td>
        <td><?php echo $record['phone'];?></td>
        <td><?php echo $record['genset'];?></td>
        <td><?php echo $record['service'];?></td>
        <td><?php echo $record['genid'];?></td>
    </tr>

    <?php }
    $conn -> close(); ?>
</table></div>

</body>
</html>

