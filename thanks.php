<?php
    session_start();
    $spoteid=$_SESSION["eid"];
    $spot=$_SESSION["spot"];
?>

<?php
if(isset($_POST['submit'])){
  $eid= $_POST['eid'];
  $phn= $_POST['phn'];
  $query= $_POST['query'];
  mail("$spoteid","Queries from $eid.$phn",$query);
  $msg="<h2><font>$eid,</font> Your Request has been sent</h2>";
}
?>

<?php
if(isset($_POST['submitq'])){
  $eidq= $_POST['eidq'];
  $queryq= $_POST['queryq'];
  mail("prave.anand124@gmail.com","Queries from $eidq",$queryq);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edu Tour</title>
    <link rel="icon" href="icon/tp.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <style>
      ::placeholder{
        color: rgba(255, 255, 255, 0.39);
      }
      body{
        user-select: none;
        background:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,0.1)), url(icon/wedbg.png) center center /cover;
        height: 100vh;
        font-size: 18px;
        text-align: center;
        margin: 0%;
        font-family: Arial;
      }
      a:hover#a1{
        color: black;
      }
      #div1{
        background-color:rgba(0, 0, 0, 0.6);
        height: 970px;
        width: 100%;
        font-size:20px;
      }
      #menu{
        background: #1f1f1f95;
        color: white;
        height: 80px;
        text-align: left;
        position: fixed;
        top:0%;
        width: 100%;
      }
      footer{
        background: linear-gradient(to right, #1f1f1f , #1f1f1f);
        color: white;
        height: 80px;
        position:relative;
        bottom:0%; 
        padding-top:10px; 
        padding-bottom:70px;
      }
      footer i{
          margin-right: 10px;
          margin-left: 10px;
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
      #button, input[type=submit]{
        color: white;
        padding: 5px;
        height: 40px;
        width: 120px;
        font-size: 20px;
        margin: 20px;
        padding:5px 20px;
      }
      #button, input[type=submit]{
        border:2px solid white;
        padding:5px 20px;
        background:linear-gradient(#1f1f1f,#1f1f1f) center/100% 0px no-repeat;
        transition:0.2s all linear;
      }
      #button:hover, input[type=submit]:hover {
        border:2px solid #1f1f1f;
        background-size:100% 100%;
        color: white;
      }
      a:link,a:visited{
        margin: 10px;
        text-decoration: none;
        color: white;
      }
      a:hover{
         color: black;
       }
      #mailcontent{
        padding-top: 100px;
        color: white;
        text-align: center;
      }
      select,input[type=text],input[type=number]{
        border: 0px solid transparent;
        border-bottom: 2px solid white;
        width:250px;
        height:30px;
        font-size: 15px;
        margin: 10px;
        padding-left: 10px;
        background: transparent;
        color: white;
      }
      textarea{
          margin: 10px;
          font-size: 15px;
          padding-left: 10px;
          padding-top: 10px;
          color: black;
          background: transparent;
          border: 2px solid white;
      }
      h2{
        color: white;
      }
      #querymsg{
        position: fixed; 
        bottom: 0%; 
        left: 5%;
        text-align: left;
        font-size: 15px;
        z-index: 1;
      }  
      #querydummy{
        border: 2px solid white;
        background-color: transparent;
        color: white;
        height: 30px;
        width: 200px;
        padding: 10px 0px 0px 30px;
      }
      #querycontent{
        z-index: 1;
        background-color: transparent;
        color: white;
        border: 2px solid white;
        display: none;
        z-index: 1;
        height: 320px;
        width: 220px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        left: 0px;
        padding: 10px 0px 0px 10px;
      }
      #querymsg:hover #querycontent{
        display: block;
      }
      #querymsg:hover #querydummy{
        display: none;
      }
    </style>
  </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form method="POST">

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
          <a href="department.php">Home</a>
          <a href="details.php">Details</a>
          <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
        </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tpw.png" width="30px" alt="">
        <h3 id="fadeshow1" >Edu Tour</h3>
      </div>

      <div id="querymsg">
          <div id="querycontent">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="Email Address" name="eidq" style="width: 150px;"><br><br>
            <p>Please let us know whether you are happy with our service</p>
            <textarea name="queryq" id="" cols="19" rows="8" placeholder="Your Queries / Problems faced"></textarea>
            <input type="submit" value="Submit" name="submitq" id="button">
          </div>
          <div id="querydummy">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            &nbsp;&nbsp;Provide Feedback
          </div>
      </div>

      <div id="mailcontent">
        <h2>Message your request to <?php echo $spot;?></h2>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="text" placeholder="Email Address" name="eid"><br><br>
        <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
        <input type="text" placeholder="Phone Number" name="phn">
        <p>Message your request mail here</p>
        <textarea name="query" id="" cols="50" rows="15" placeholder="Your Request"></textarea><br>
        <input type="submit" value="Submit" name="submit" id="button">
      </div>

      <div id="thanks">
      <?php if(isset($msg)){ echo $msg; } else { echo ''; }?>
        <a id="a1" href="about.php"> <p>Back to Home</p> </a>
      </div>
    </div>
    <!-- <button type="button" onclick="document.getElementById('menu').style.backgroundColor = 'red'">Click Me!</button> -->
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
