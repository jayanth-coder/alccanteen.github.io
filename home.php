<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap');

body {
  padding: 0;
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: whitesmoke;
 
}

span {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: block;
  color: #cf1b1b;
  font-size: 124px;
  letter-spacing: 8px;
  cursor: pointer;
}

span::before {
  content: "ALC Canteen";
  position: absolute;
  color: transparent;
  background-image: repeating-linear-gradient(
    45deg,
    transparent 0,
    transparent 2px,
    white 2px,
    white 4px
  );
  -webkit-background-clip: text;
  top: 0px;
  left: 0;
  z-index: -1;
  transition: 1s;
}

span::after {
  content: "ALC Canteen";
  position: absolute;
  color: transparent;
  background-image: repeating-linear-gradient(
    135deg,
    transparent 0,
    transparent 2px,
    white 2px,
    white 4px
  );
  -webkit-background-clip: text;
  top: 0px;
  left: 0px;
  transition: 1s;
}

span:hover:before {
  top: 10px;
  left: 10px;
}

span:hover:after {
  top: -10px;
  left: -10px;
} 

</style>
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<header class="header">

   <div class="flex">

      <a href="#" class="logo">Food Court</a>

      <nav class="navbar">
         <a href="admin.php">Admin</a>
         <a href="student.php">Student</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>

<img src="images/x.jpg" width="100%" height="20%">

<span>ALC Canteen</span>
<marquee><p style="color:red;font-size: 20px;">Welcome to ALC Canteen Online Website. Where you can place orders online without any hassles 
and skip the queue.</p></marquee>











<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>