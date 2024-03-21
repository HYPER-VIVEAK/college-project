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
    <link rel="stylesheet" href="form.css">
    <link rel="script" href="login.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              <form action="by.php" method="post">
                <div class="imgcontainer">
                  <img src="images/avatar.jpg" alt="Avatar" class="avatar">
                </div>
              
                <div class="container">
                  <label for="name"><b>Name</b></label>
                  <input type="text" placeholder="Enter Username" name="name" required>
              
                  <label for="phone"><b>Phone Number</b></label>
                  <input type="text" placeholder="Enter phone number" name="phone" required>

                  <label for="genset"><b>gemerator model and year</b></label>
                  <input type="text" placeholder="Enter genset model" name="genset" required>              
                  <button class="butt" type="submit">fill form </button>                  
                </div>          
               </form>
            </div>
</div>
</body>
</html>
             