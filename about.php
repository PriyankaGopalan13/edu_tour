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
          background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,0.7)), url(icon/wedbg.png) center center /cover;
          height: 100vh;
          font-size: 18px;
          text-align: center;
          margin: 0%;
          font-family: Arial;
          min-width:600px;
        }
        #div1{
          /* background-color:rgba(0, 0, 0, 0.6); */
          height: 100%;
          width: 100%;
          font-size:20px;
        }
        #menu{
          background: #1f1f1f95;
          height: 80px;
          text-align: left;
          position: fixed;
          top:0%;
          width: 100%;
          color: white;
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
        a:link,a:visited{
          margin: 10px;
          text-decoration: none;
          color: white;
        }
        a:hover{
           color: black;
         }
         #divcen{
           color: white;
           text-shadow: 2px 2px 2px black;
           padding-top: 250px;
         }
         input{
          border: 0px solid white;
          border-bottom: 3px solid white;
          background: transparent;
          color: white;
          width:300px;
          height:40px;
          font-size: 20px;
          margin: -2px;
          padding: 10px;
         }
         #button{
            color: white;
            padding: 5px;
            height: 40px;
            width: 120px;
            font-size: 20px;
            margin: 20px;
            padding:5px 20px;
        }
        #button{
            border:2px solid white;
            padding:5px 20px;
            background:linear-gradient(#1f1f1f,#1f1f1f) center/100% 0px no-repeat;
            transition:0.2s all linear;
        }
        #button:hover{
            border:2px solid #1f1f1f;
            background-size:100% 100%;
            color: white;
        }
      </style>

      <script>
      function suggestion(){
        var p1=/^so/;
        var p2=/^ci/;
        var p3=/^me/;
        var p4=/^el/;
        var p5=/^ag/;
        var dept = document.getElementById("dept");
        if(dept.value == ""){
          document.getElementById("suggestion").innerHTML = "No Match Found. <a href='department.php'>Click</a>for specified search";
        }
        else{
            if (dept.value.match(p1)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='department.php'>Software Engineering</a>";
            }
            if (dept.value.match(p2)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='department.php'>Civil Engineering</a>";
            }
            if (dept.value.match(p3)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='department.php'>Mechanical Engineering</a>";
            }
            if (dept.value.match(p4)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='department.php'>Electrical Engineering</a>";
            }
            if (dept.value.match(p5)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='department.php'>Agriculture</a>";
            }
         }
      }
      </script>
      <script>
      function suggestion1(){
        var p1=/^ba/;
        var p2=/^mu/;
        var p3=/^pu/;
        var p4=/^hy/;
        var p5=/^ch/;
        var loc = document.getElementById("loc");
        if(loc.value == ""){
          document.getElementById("suggestion1").innerHTML = "No Match Found. <a href='location.php'>Click</a>for specified search";
        }
        else{
            if (loc.value.match(p1)){
              document.getElementById("suggestion1").innerHTML = "SUGGESTIONS:  <a href='location.php'>Banglore</a>";
            }
            if (loc.value.match(p2)){
              document.getElementById("suggestion1").innerHTML = "SUGGESTIONS:  <a href='location.php'>Mumbai</a>";
            }
            if (loc.value.match(p3)){
              document.getElementById("suggestion1").innerHTML = "SUGGESTIONS:  <a href='location.php'>Pune</a>";
            }
            if (loc.value.match(p4)){
              document.getElementById("suggestion1").innerHTML = "SUGGESTIONS:  <a href='location.php'>Hyderabad</a>";
            }
            if (loc.value.match(p5)){
              document.getElementById("suggestion1").innerHTML = "SUGGESTIONS:  <a href='location.php'>Chennai</a>";
            }
         }
      }
      </script>
    </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

    <body>
      <form action="">

      <script type="text/javascript">
          function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
          }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div id="menu">
        <div style="float: right; margin: 25px;">
        <span id="google_translate_element" style="position: absolute; right: 400px;"></span>
          <a href="about.php" style="color:white"><big>About</big></a>
          <a href="department.php">Home</a>
          <a href="details.php">Booking</a>
          <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
        </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tpw.png" width="30px" alt="">
        <h3 id="fadeshow1" >Edu Tour</h3>
      </div>    

      <div id="div1">
        <div id="divcen">
          <h1>Choose your Educational Tour Spot yourself</h1>
          <p>Search for the Tour Spots</p>
        </div>
        <div>
          <input type="search" placeholder="Department" id="dept" style="width: 500px;">
          <input type="button" value="FIND" id="button" onclick="return suggestion()">
          <div id="suggestion"></div>
        </div>

        <div>
          <input type="search" placeholder="Location" id="loc" style="width: 500px;">
          <input type="button" value="FIND" id="button" onclick="return suggestion1()">
          <div id="suggestion1"></div>
        </div>

        <div style="margin-top: 10%;">
          <!-- <a id="a1" href="services.php">Search for Vendors</a> -->
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