<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Edu Tour</title>
    <link rel="icon" href="icon/tp.png">
    <link href="sheet.css" rel="stylesheet" type="text/css" />
    <script src="script1.js" type="text/javascript"></script>
  </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Login to Edu Tour</h1>
       <h2>** Forget Password **</h2>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Your Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass1" id="pass" placeholder="New Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass2" id="pass1" placeholder="Re-enter Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$" style="width: 290px;">
       </div>     
       <br><br>  
       <?php
        $conn = mysqli_connect("localhost", "root", "","educational_tour");
        session_start();

        if (isset($_POST['submit'])){            
            $email=$_POST['email'];
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];

            $mail_query =mysqli_query($conn, "SELECT * from customers WHERE email='$email'") ;
            $rows = mysqli_num_rows($mail_query);
            if($rows == 1){
                if($pass1 == $pass2){
                    $query = mysqli_query($conn, "UPDATE customers SET password='$pass1' WHERE email='$email'");
                    echo ("Updated Sucessfully<br><br>");
                    // $subject="Password Change";
                    // $message="Your Password has been Changed";
                    // mail($email,$subject,$message);
                }
                else{
                    echo ("Password doesn't match<br><br>");
                }
                mysqli_close($conn);
                }
            else{
                echo ("Email doesn't exists<br><br>");
            }
            }
        ?>
        
       <input type="submit" value="SUBMIT" id="button" name="submit">
       <p>Go Back to <a href="index.php">Login Page</a> </p>
     </div>
    </form>
  </body>
</html>
