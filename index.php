<?php
      $conn = mysqli_connect("localhost", "root", "","educational_tour");

      if (isset($_POST['submit'])){
          session_start();
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $_SESSION["email"] = $_POST["email"];
          
            $query = mysqli_query($conn, "SELECT * from customers WHERE email='$email' AND password='$pass'");
            $rows = mysqli_num_rows($query);
            if($rows == 1){
                header("Location: about.php");
            }
            else{
                echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
                // echo "<script type='text/javascript'>document.getElementById('invalid').innerHTML = 'Invaild';</script>";
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
    <link href="sheet.css" rel="stylesheet" type="text/css">
  </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
     <br><br>
       <h1>Login to Edu Tour</h1>
       <p id="invalid"></p>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$"  style="width: 290px;">
       </div>
       <a href="forget.php"> <p>Forget password?</p> </a>
       <input type="submit" value="SIGN IN" id="button" name="submit">
       <p>Don't have an account? <a href="signup.php">REGISTER</a> </p>
       <p>OR <a href="includes.php">GIVE YOUR KNOWN SITE DETAILS</a> </p>
     </div>
    </form>
  </body>
</html>
