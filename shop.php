<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$conn = mysqli_connect($servername, $username, $password, $dbname) or 
die("Connection failed: " . mysqli_connect_error());
$sql = "SELECT id, name, image, description, price  FROM card";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
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

</div>
</div>
<?php 
while( $record = mysqli_fetch_assoc($resultset) ) {
    ?>
    <div class="div1">
                
                <a href="sform.php"><img class="imgcl" src="<?php echo $record['image']; ?>">
                <div class="name"> <h3> <?php echo $record['name'];?></h3></div>
                <div class="name"> <h3> Rs <?php echo $record['price']; ?></h3></div>
                <div class="name"> <h3># <?php echo $record['id']; ?></h3></div>
                <div class="desc"><?php echo $record['description']; ?></div>     
</div>          
<?php } ?>

</body>
</html>
