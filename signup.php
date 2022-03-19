<?php
      $conn = mysqli_connect("localhost", "root", "","educational_tour");

      if (isset($_POST['submit'])){
          session_start();
          $email=$_POST['email'];
          $email2=$_POST['email2'];
          $pass=$_POST['pass'];
          $number=$_POST['number'];
          
          if($email == $email2){
            $query = "INSERT INTO customers(email,password,phone) VALUES ('$email','$pass','$number')";
            mysqli_query($conn,$query);
            // $_SESSION['message'] = "You are now logged in";
            header("Location: index.php");
          }
          else{
            echo "<script type='text/javascript'>alert('Email does not match');</script>";
          }
          mysqli_close($conn);
        }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edu Tour</title>
    <link rel="icon" href="icon/tp.png">
    <link href="sheet.css" rel="stylesheet" type="text/css" />
  </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form action=""  method="POST">
     <div id="div1" align="center">
       <h1>Signup with Edu Tour</h1>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"  style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email2" placeholder="Re-enter Email Address"  required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="text" name="number" placeholder="10 digit mobile no." required pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$" style="width: 290px;">
       </div>
       <br><br>
       <input type="submit" value="REGISTER" id="button" name="submit" style="width: 150px;">
       <p>Already have an account? <a href="index.php">LOG IN</a> </p>
     </div>
    </form>
  </body>
</html>
