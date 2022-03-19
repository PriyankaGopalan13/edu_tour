<?php
     session_start();
?>

<?php
    $con=mysqli_connect("localhost", "root", "","educational_tour");

    $department=$_SESSION['department'];

    $query = mysqli_query($con, "SELECT * from department WHERE department = '$department'");
    while($row = mysqli_fetch_array($query)){
        $id= $row['id'];
        $department = $row['department'];
        $img1=$row['img1'];
        $name1=$row['name1'];
        $img2=$row['img2'];
        $name2=$row['name2'];
        $img3=$row['img3'];
        $name3=$row['name3'];
        $img4=$row['img4'];
        $name4=$row['name4'];
        $img5=$row['img5'];
        $name5=$row['name5'];
        $loc1='<img src="data:image/jpeg;base64,'.base64_encode($img1).'" style="width:300px; height:200px;"/>';
        $loc2='<img src="data:image/jpeg;base64,'.base64_encode($img2).'" style="width:300px; height:200px;"/>';
        $loc3='<img src="data:image/jpeg;base64,'.base64_encode($img3).'" style="width:300px; height:200px;"/>';
        $loc4='<img src="data:image/jpeg;base64,'.base64_encode($img4).'" style="width:300px; height:200px;"/>';
        $loc5='<img src="data:image/jpeg;base64,'.base64_encode($img5).'" style="width:300px; height:200px;"/>';
    }
    mysqli_close($con);
?>

<?php
  if(isset($_POST['spot'])){
    header("Location: details.php");
    $_SESSION['spot']=$_POST['spot'];
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
        body{
          user-select: none;  
          background:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,0.1)), url(icon/wedbg.png) center center /cover;
          height: 100vh;
          font-size: 18px;
          text-align: center;
          margin:0%;
          font-family: Arial;
          /* min-width:1500px;   */
        }
        #div1{
          background-color:rgba(0, 0, 0, 0.6);
          font-size:20px;
          padding-bottom: 20px;
          padding-top: 1px;
        }
        #menu{
          background: #1f1f1f95;
          color: white;
          height: 80px;
          text-align: left;
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
        }
        footer i{
            margin-right: 10px;
            margin-left: 10px;
        }
        #info{
           text-align: left;
           margin: 50px;
           padding-top: 2px;
           text-shadow: 1px 1px 40px white;
         }
        a:link,a:visited{
          margin: 10px;
          text-decoration: none;
          color: white;
        }
        a:hover{
           color: black;
         }
         #hl{
             background-color: rgba(255,255,255, 0.5);
             padding: 8px;
             padding-left: 15px;
             padding-right: 15px;
             border-radius: 20px;
         }
        .fig{
            display: inline-block;
            margin: 25px;
            margin-top: 0px;
            margin-bottom: 80px;
            background-color: rgba(255,255, 255, 0.7);
            width: 300px;
            height: 200px;
            text-align: center;
        }
        .fig input[type=submit]{
            background-color: #32a852;
            border: 1px solid gray;
            padding: 5px;
            visibility: hidden;
        }
        .fig:hover{
          transform:scale(1.3);
          transition: 0.2s;
        }
        #venlabel{
            position:relative; 
            bottom: 48px; 
            background-color:rgba(0, 0, 0, 0.9); 
            color:white; 
            /* padding:10px; */
            font-size: 20px;
        }
        h4{
          background: #1f1f1f95;
          color: white;
          padding: 20px;
          width: 1478px;
          position: relative;
          right: 50px;
        }
      </style>
    </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

    <body>
      <form action="" method="POST" enctype="multipart/form-data">

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
            <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tpw.png" width="30px" alt="">
        <h3 id="fadeshow1" >Edu Tour</h3>
        </div>
        <div id="info">
            <div>
                    <h4>DOMESTIC</h4>

                    <label><div class="fig">
                    <?php if(isset($loc1)){ echo $loc1; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name1)){ echo $name1; } else { echo 'Not Set'; }?></p>
                    <input type="submit" value="<?php if(isset($name1)){ echo $name1; } else { echo 'Not Set'; }?>" name="spot"></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc2)){ echo $loc2; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name2)){ echo $name2; } else { echo 'Not Set'; }?></p>
                    <input type="submit" value="<?php if(isset($name2)){ echo $name2; } else { echo 'Not Set'; }?>" name="spot"></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc3)){ echo $loc3; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name3)){ echo $name3; } else { echo 'Not Set'; }?></p>
                    <input type="submit" value="<?php if(isset($name3)){ echo $name3; } else { echo 'Not Set'; }?>" name="spot"></div></label>

                    <label><div class="fig">
                    <?php if(isset($loc4)){ echo $loc4; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name4)){ echo $name4; } else { echo 'Not Set'; }?></p>
                    <input type="submit" value="<?php if(isset($name4)){ echo $name4; } else { echo 'Not Set'; }?>" name="spot"></div></label>

                    <h4>INTERNATIONAL</h4>

                    <label><div class="fig">
                    <?php if(isset($loc5)){ echo $loc5; } else { echo ''; }?>
                    <p id="venlabel"><?php if(isset($name5)){ echo $name5; } else { echo 'Not Set'; }?></p>
                    <input type="submit" value="<?php if(isset($name5)){ echo $name5; } else { echo 'Not Set'; }?>" name="spot"></div></label>

                    <h4>NEW INCLUDES</h4>

                    <?php
                        $department2=$_SESSION['department'];  
                        $con2=mysqli_connect("localhost", "root", "","educational_tour");
                        $query2 = mysqli_query($con2, "SELECT * from spots where department = '$department2' and timestamp IS NOT NULL");
                        while($row2 = mysqli_fetch_array($query2)){
                            $namen = $row2['name'];
                            $counter2=mysqli_num_rows($query2);
                            echo ("<label><div class='fig'>
                                    <img src='data:image/jpeg;base64,".base64_encode($row2["pic"] )."' style='width:100%; height:100%;'>
                                    <p id='venlabel'>$namen</p>
                                    <input type='submit' value='$namen' name='spot'></label>
                                    </div>");
                        }
                    ?>

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
