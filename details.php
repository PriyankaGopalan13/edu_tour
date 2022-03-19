<?php
     session_start();
?>

<?php
    $con=mysqli_connect("localhost", "root", "","educational_tour");

    $spot=$_SESSION['spot'];

    $query = mysqli_query($con, "SELECT * from spots WHERE name = '$spot'");
    while($row = mysqli_fetch_array($query)){
        $id= $row['id'];
        $name = $row['name'];
        $city = $row['city'];
        $service = $row['service'];
        $intro = $row['intro'];
        $s1 = $row['s1'];
        $s2 = $row['s2'];
        $s3 = $row['s3'];
        $s4 = $row['s4'];
        $s5 = $row['s5'];
        $s6 = $row['s6'];
        $addr = $row['addr'];
        $eid = $row['eid'];
        $phone = $row['phone'];
        $maps=$row['maps'];
        $video=$row['video'];
        $a1 = $row['a1'];
        $a2 = $row['a2'];
        $a3 = $row['a3'];
        $a4 = $row['a4'];
        $freetime=$row['freetime'];
        $certificate=$row['certificate'];
        $pastvisit=$row['pastvisit'];
        $presenters=$row['presenters'];
        $star=$row['star'];
        $img=$row['img'];
        $loc='<img src="data:image/jpeg;base64,'.base64_encode($img).'" width=500px />';
    }

    if(isset($_POST['post'])){
        $comments = $_POST['comments'];
        $cid=$_POST['post'];
        $query1 = mysqli_query($con, "INSERT INTO spots(cid,comments,timestamp) VALUES ('$cid','$comments','')");
    }

    if(isset($_POST['upload']))  
    {  
         $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
         $cpid=$_POST['upload'];  
         $query2 = mysqli_query($con, "INSERT INTO spots(cid,img,timestamp) VALUES ('$cpid','$file','')");
    }

    mysqli_close($con);
?>

<?php
  if(isset($_POST['spot'])){
    header("Location: thanks.php");
    $_SESSION['spot']=$name;
    $_SESSION['eid']=$eid;
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
          margin:0%;
          font-family: Arial;
          min-width:1500px;  
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
        #info{
           text-align: left;
           margin: 50px;
           padding-top: 100px;
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
         #list,li{
           max-width: 600px;
           margin:50px;
           margin-top:0px;
           margin-left:-20px;
         }
         #list{
          list-style: none;
         }
         #message{
           color:white;
         }
         input[type=button], input[type=submit],button{
          background-color: linear-gradient(#1f1f1f,#1f1f1f) center/100% 0px no-repeat;
          border: 0px solid gray;
          padding: 5px;
         }
         input[type="file"] {
            display: none;
         }
         input[type='text']{
            height: 30px; 
            width: 600px; 
            font-size: 20px; 
            padding: 10px; 
            border: 0px solid; 
            border-bottom:3px solid white; 
            color: white; 
            background: transparent;
         }
         #hl{
             background-color: rgba(255,255,255, 0.5);
             padding: 8px;
             padding-left: 15px;
             padding-right: 15px;
             border-radius: 20px;
         }
         .B1{
             display: none;
         }
         #button, input[type=submit]{
            color: white;
            padding: 5px;
            height: 40px;
            width: 100px;
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
            <a href="department.php">Home</a>
            <a href="details.php" style="color:white"><big>Details</big></a>
            <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tpw.png" width="30px" alt="">
        <h3 id="fadeshow1" >Edu Tour</h3>
        </div>
        <div id="info">

            <table>
                <tr>
                    <td><h1><?php if(isset($name)){ echo $name; } else { echo 'No Name Set'; }?></h1>
                        <span id="hl"><?php if(isset($city)){ echo $city; } else { echo ''; }?></span>
                        <span id="hl"><?php if(isset($service)){ echo $service; } else { echo ''; }?></span></td>
                </tr>
                <tr>
                    <td style="padding-top: 50px;"><h3>INTRODUCTION</h3></td>
                </tr>
                <tr>
                    <td><p><?php if(isset($intro)){ echo $intro; } else { echo 'No Intro Given'; }?></p></td>
                </tr>
                <tr>
                    <td>
                    <table width=100%>
                        <tr>
                            <td><h3>FOCUS AREA</h3>
                                 <p><?php if(isset($s1)){ echo $s1; } else { echo ''; }?><br><br>
                                    <?php if(isset($s2)){ echo $s2; } else { echo ''; }?><br><br>
                                    <?php if(isset($s3)){ echo $s3; } else { echo ''; }?><br><br>
                                    <?php if(isset($s4)){ echo $s4; } else { echo ''; }?><br><br>
                                    <?php if(isset($s5)){ echo $s5; } else { echo ''; }?><br><br>
                                    <?php if(isset($s6)){ echo $s6; } else { echo ''; }?><br><br>
                                 </p></td>
                            <td><h3>DETAILS</h3>
                                <p><b>Address</b><br><?php if(isset($addr)){ echo $addr; } else { echo 'Not Provided'; }?> <br><br>
                                    <b>Email</b><br><a href="mailto:<?php if(isset($eid)){ echo $eid; } else { echo ''; }?>?Subject=Hello%20again" target="_top"><?php if(isset($eid)){ echo $eid; } else { echo 'Not Provided'; }?></a> <br><br>
                                    <b>Phone</b><br><?php if(isset($phone)){ echo $phone; } else { echo 'Not Provided'; }?> <br><br>
                                </p><br><br><br></td>
                            <td><h3>GALLERY</h3>
                            <iframe width="500" height="300" src="<?php if(isset($video)){ echo $video; } else { echo ""; }?>" frameborder="0"></iframe>
                                <br><br></td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                  <td>
                      <table width=100%>
                        <tr>
                          <td>
                          <h3>LOCATION</h3>
                          <iframe width="500" height="300" src="<?php if(isset($maps)){ echo $maps; } else { echo ""; }?>" frameborder="0"></iframe>
                          </td>
                          <td>
                            <h3>HOTELS AND ATTRACTIONS NEARBY</h3>
                            <p><?php if(isset($a1)){ echo $a1; } else { echo ''; }?><br><br>
                               <?php if(isset($a2)){ echo $a2; } else { echo ''; }?><br><br>
                               <?php if(isset($a3)){ echo $a3; } else { echo ''; }?><br><br>
                               <?php if(isset($a4)){ echo $a4; } else { echo ''; }?><br><br>
                            </p><br><br><br>
                          </td>
                          <td>
                            <h3>FREE TIME SLOTS AND COST</h3>
                            <p><?php if(isset($freetime)){ echo $freetime; } else { echo 'Not Provided'; }?></p>
                            <br><br><br><br><br><br><br><br><br><br>
                          </td>
                        </tr>
                      </table>
                      <br><br><br><br>
                  </td>
                </tr>

                <tr>
                  <td>
                      <table width=100%>
                        <tr>
                          <td>
                            <h3>CERTIFICATION AND VALUES</h3>
                            <p><?php if(isset($certificate)){ echo $certificate; } else { echo 'Not Provided'; }?></p>
                            <br><br><br><br><br><br>
                          </td>
                          <td>
                            <h3>PAST INSTITUTIONAL VISIT</h3>
                            <p><?php if(isset($pastvisit)){ echo $pastvisit; } else { echo 'Not Provided'; }?></p>
                            <br><br><br><br><br><br>
                          </td>
                          <td>
                            <h3>CHOOSE YOUR PRESENTER</h3>
                            <p><?php if(isset($presenters)){ echo $presenters; } else { echo 'Not Provided'; }?></p>
                            <br><br><br><br><br><br>
                          </td>
                        </tr>
                      </table>

                      <table width=100%>
                      <tr>                          
                        <td>
                          <h3>PANDEMIC MAP</h3>
                          <iframe src="https://www.bing.com/covid?ref=embedding" style="width: 100%; height: 500px; border: none;"></iframe>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h3>CLIMATIC MAP</h3>
                          <iframe height="500px" width="100%" src="https://embed.windy.com/embed2.html?lat=20.462&lon=80.622&detailLat=12.900&detailLon=80.221&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                        </td>
                      </tr>
                      </table>

                      <br><br><br><br>
                  </td>
                </tr>

                <tr>
                <td><input type="text" id="review" placeholder="Write a review" name="comments">
                    <label><i class="fa fa-picture-o" aria-hidden="true" style="font-size:30px; margin-left: 20px; position: relative; right:80px; top:8px;"></i><input type="file" name="img" id="img"></label>
                    <label><i class="fa fa-comment" aria-hidden="true" style="font-size:30px; margin-left: 20px; position: relative; top:8px;"></i><input type="submit" value="<?php echo $id;?>" name="post" style="display:none;"></label>
                    <label><i class="fa fa-upload" aria-hidden="true"style="font-size:30px; margin-left: 20px; position: relative; top:8px;"></i><input type="submit" value="<?php echo $id;?>" name="upload" style="display:none;"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width=100%>
                            <tr>
                                <td align="left"><div>

                                    <?php    
                                    $con1=mysqli_connect("localhost", "root", "","educational_tour");
                                    $query3 = mysqli_query($con1, "SELECT * from spots WHERE cid='$id'");
                                    $counter=mysqli_num_rows($query3);
                                    echo "<h3>ALL REVIEWS (".$counter.")</h3><br>";
                                    ?>

                                    <nav style='overflow-y: scroll; overflow-x: hidden; height: 500px; width: 620px; background-color: rgba(255,255,255, 0.3);'>
                                        <ul style="width: 600px; list-style-type:none;">
                                            <?php    
                                                $con2=mysqli_connect("localhost", "root", "","educational_tour");
                                                $query4 = mysqli_query($con2, "SELECT * from spots WHERE cid='$id' and img is NULL");;
                                                while($row1 = mysqli_fetch_array($query4)){
                                                    echo "<li>".$row1['comments']."</li>";
                                                    echo "<hr style='margin-left: -50px; margin-bottom: 30px;'>";
                                                }
                                            ?>

                                            <?php  
                                                $con3=mysqli_connect("localhost", "root", "","educational_tour");
                                                $query5 = mysqli_query($con3, "SELECT * FROM spots WHERE cid='$id' and comments is NULL");  
                                                while($row2 = mysqli_fetch_array($query5))  
                                                {  
                                                    echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row2['img'] ).'" width="300"/><li>';  
                                                    echo "<hr style='margin-left: -50px; margin-bottom: 30px;'>";
                                                }  
                                            ?>
                                        </ul>
                                    </nav>     

                                    </div></td>

                                    <?php 
                                        printf('<div style="display:none">');
                                            $con10=mysqli_connect("localhost", "root", "","educational_tour");
                                            $query10 = mysqli_query($con10, "SELECT * from spots WHERE cid='$id'");
                                            while($row10 = mysqli_fetch_array($query10)){
                                                $comm= $row10['comments'];
                                            }
                                            include ('lib/sentiment_analyser.class.php');
                                            $sa = new SentimentAnalysis();
                                            $sa->initialize();
                                            $sa->analyse("$comm");
                                            $score = $sa->return_sentiment_rating();
                                        printf('</div>');
                                    ?>

                                <td align="right">
                                    <table>
                                        <tr>
                                            <td colspan="2"><h1 style="font-size: 100px; font-weight: normal; text-align: center;"><?php if(isset($score)){ echo $score; } else { echo 'Review '; }?></h1></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " >
                                                <img src="icon/star.png" alt="" style="width: 50px; height: 50px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Responsiveness</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Professionalism</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Value</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Flexibility</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                        <tr>
                                            <td>Behaviour</td>
                                            <td><img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " >
                                                <img src="icon/star.png" alt="" style="width: 20px; height: 20px; " ></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                   <td><div><h3>REQUEST FOR A VISIT</h3>
                        <p>If you are sure in visiting the above site then make sure you enquire the management of the site before making a trip for verification and prior information.</p>
                        <input type="submit" value="Request" name="spot" style="width: 150px;">
                    </div></td>
                </tr>
            </table>
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

        <!--?rel=0;&autoplay=1&mute=1&loop=1-->
        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
     
    </body>
  </html>