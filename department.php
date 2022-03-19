<?php
      session_start();
?>

<?php
  if(isset($_POST['department'])){
    header("Location: spot.php");
    $_SESSION['department']=$_POST['department'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edu Tour</title>
    <link rel="icon" href="icon/tp.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <style>
      body{
        user-select: none;
        background:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,0.1)), url(icon/wedbg.png) center center /cover;
        height: 100vh;
        margin: 0%;
        font-family: Arial;
        font-size: 18px;
        min-width:600px;
      }
      #div1{
        background-color:rgba(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        font-size:20px;
        padding-bottom: 10px;
      }
      #menu{
        background: #1f1f1f95;
        color: white;
        height: 80px;
        position: fixed;
        top:0%;
        width: 100%;
        z-index: 1;
      }
      #fadeshow1{
        display: inline-block; 
        position: relative;
        bottom: 20px;
      }
      @media only screen and (max-width: 700px) { 
        #fadeshow1 { 
          display: none; 
        } 
      }
      footer{
        background: linear-gradient(to right, #1f1f1f , #1f1f1f);
        color: white;
        height: 80px;
        position:relative;
        bottom:0%; 
        padding-top:10px; 
        padding-bottom:70px;
        text-align: center;
      }
      footer i{
          margin-right: 10px;
          margin-left: 10px;
      }
      #maindiv{
        padding-top: 150px;
      }
      #vendor{
        padding-left: 50px;
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      .fig{
        display: inline-block;
        /* margin: 10px; */
        margin-top: 0px;
        background-color: rgba(255,255, 255, 0.7);
        width: 1000px;
        height: 500px;
        text-align: center;
      }
      .fig input[type=submit]{
        border: 1px solid gray;
        padding: 5px;
        visibility: hidden;
      }
      /* .fig:hover{
        transform:scale(1.3);
        transition: 0.2s;
      } */
      #venlabel{
        position:relative; 
        bottom: 60px; 
        background-color:rgba(0, 0, 0, 0.9); 
        color:white; 
        padding:10px;
        font-size: 25px;
      }
      a:link,a:visited{
        margin: 10px;
        text-decoration: none;
        color: white;
      }
      a:hover{
         color: black;
       }
      h4{
        background: #1f1f1f95;
        color: white;
        padding: 20px;
        width: 1478px;
        position: relative;
        bottom:97px;
      }
    </style>

<script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
<script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form action="" name="plan" method="post">

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div id="div1">
        <div id="menu">
          <div style="float: right; margin: 25px;">
          <span id="google_translate_element" style="position: absolute; right: 400px;"></span>
            <a href="about.php">About</a>
            <a href="department.php" style="color:white"><big>Home</big></a>
            <a href="details.php">Details</a>
            <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tpw.png" width="30px" alt="">
        <h3 id="fadeshow1" >Edu Tour</h3>
        </div>
     <div id="maindiv">
     <h4>SELCT YOUR DEPARTMENT</h4>
     <div id="vendor">

      <label><div class="fig">
        <img src="icon/ct1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Software Engineering</p>
        <input type="submit" value="Software Engineering" name="department"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Civil Engineering</p>
        <input type="submit" value="Civil Engineering" name="department"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct3.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Mechanical Engineering</p>
        <input type="submit" value="Mechanical Engineering" name="department"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct4.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Electrical Engineering</p>
        <input type="submit" value="Electrical Engineering" name="department"></div></label>
      
      <label><div class="fig">
        <img src="icon/ct5.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Agricultural</p>
        <input type="submit" value="Agricultural" name="department"></div></label>
        
     </div>
     </div>
    </div>
    <footer>
        <p align="center">guiding you in right path</p>
        <h2 align="center">Edu Tour</h2>
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-youtube-play" aria-hidden="true"></i>
        <i class="fa fa-pinterest" aria-hidden="true"></i>
    </footer>
    </form>
  </body>
  </html>
