<?php
      $conn = mysqli_connect("localhost", "root", "","educational_tour");
      session_start();
      
      if (isset($_POST['submit'])){
          $name=$_POST['name'];
          $city=$_POST['city'];
          $service=$_POST['service'];
          $intro=$_POST['intro'];
          $s1=$_POST['s1'];
          $s2=$_POST['s2'];
          $s3=$_POST['s3'];
          $s4=$_POST['s4'];
          $s5=$_POST['s5'];
          $s6=$_POST['s6'];
          $addr=$_POST['addr'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $video=$_POST['video'];
          $maps=$_POST['maps'];
          $a1=$_POST['a1'];
          $a2=$_POST['a2'];
          $a3=$_POST['a3'];
          $a4=$_POST['a4'];
          $freetime=$_POST['freetime'];
          $certificate=$_POST['certificate'];
          $pastvisit=$_POST['pastvisit'];
          $presenters=$_POST['presenters'];
          $category=$_POST['category'];
          $file = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
        
          $query = "INSERT INTO spots VALUES (DEFAULT, NULL ,'$name','$city','$service','$intro','$s1','$s2','$s3','$s4','$s5','$s6','$addr','$email','$phone','$maps','$video','$a1','$a2','$a3','$a4','$freetime','$certificate','$pastvisit','$presenters', NULL ,'', NULL ,now(),'$service','$file','$category')";
          if(mysqli_query($conn,$query)){
            $msg="Updated Sucessfully";
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  </head>

  <script src="https://app.wotnot.io/chat-widget/h8gBrkdjvCDA1752379785262XxuZ02O.js" defer></script>
  <script src="https://chatwee-api.com/v2/script/60add71cc61cfd422d4345e2.js"></script>

  <body>
    <form action="" method="POST" enctype="multipart/form-data">
     <div id="div1" align="center">
       <h1>Contribute to Edu Tour</h1>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="name" placeholder="Name" required pattern="[A-z]+" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-globe" aria-hidden="true"></i>
          <input type="text" name="city" placeholder="City" style="width: 290px;">
       </div>
       <div id="textdes" style="margin-bottom: 30px;">
          <i class="fa fa-graduation-cap" aria-hidden="true" style=" width:20px;"></i>
          <input type="text" name="service" placeholder="For Departments" style="width: 280px;">
       </div>
       <textarea name="intro" id="" cols="30" rows="10" placeholder="Describe Information" required></textarea>
       <div id="textdes">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 1" name="s1" id="s1" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 2" name="s2" id="s2" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 3" name="s3" id="s3" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 4" name="s4" id="s4" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 5" name="s5" id="s5" style="width: 290px;">
       </div>
       <div id="textdes" style="margin-bottom: 30px;">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
          <input type="text" placeholder="Focus Area 6" name="s6" id="s6" style="width: 290px;">
       </div>
       <textarea name="addr" id="" cols="30" rows="10" placeholder="Address" required></textarea>
       <div id="textdes">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required  pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" style="width: 280px;">
       </div>
       <select name="countryCode" id="">
        <option data-countryCode="IN" value="91">India (+91)</option>
        <optgroup label="Other countries">
          <option data-countryCode="US" value="1">USA (+1)</option>
          <option data-countryCode="GB" value="44">UK (+44)</option>
        </optgroup>
      </select>
      <div id="textdes">
          <i class="fa fa-phone" aria-hidden="true"></i>  
          <input type="text" name="phone" placeholder="Phone No."  required pattern="\d{10}" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
          <input type="text" name="video" placeholder="Gallery (in Embed link)" style="width: 280px;">
       </div>
       <div id="textdes">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <input type="text" name="maps" placeholder="Maps (in Embed Link)" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-map-pin" aria-hidden="true"></i>
          <input type="text" name="a1" placeholder="Nearby Location 1 (Restaurents)" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-map-pin" aria-hidden="true"></i>
          <input type="text" name="a2" placeholder="Nearby Location 2 (Parks)" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-map-pin" aria-hidden="true"></i>
          <input type="text" name="a3" placeholder="Nearby Location 3 (Mall)" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-map-pin" aria-hidden="true"></i>
          <input type="text" name="a4" placeholder="Nearby Location 4 (Hotels)" style="width: 290px;">
       </div>

       <div id="textdes">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <input type="text" name="freetime" placeholder="Free time slots" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 15px;"></i>
          <input type="text" name="certificate" placeholder="Certification Values" style="width: 280px;">
       </div>
       <div id="textdes">
          <i class="fa fa-building-o" aria-hidden="true"></i>
          <input type="text" name="pastvisit" placeholder="Past Institutional Visits (seperate by ;)" style="width: 290px;">
       </div>
       <div id="textdes">
          <i class="fa fa-id-badge" aria-hidden="true"></i>
          <input type="text" name="presenters" placeholder="List of Presenters (seperate by ;)" style="width: 290px;">
       </div>

       <div id="textdes" style="margin-bottom: 20px;">
          <i class="fa fa-fighter-jet" aria-hidden="true"></i>
          <input type="text" name="category" placeholder="Domestic/International" style="width: 280px;">
       </div>
       <div id="textdes"  style="text-align: left;">
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          <input type="file" name="pic" id="pic" style="width: 290px;">
       </div>

       <br><br>
       <input type="submit" value="SUBMIT" id="button" name="submit"> <br><br>
       <?php if(isset($msg)){ echo $msg; } else { ""; }?>
       <p>Go Back to <a href="index.php">Login Page</a> </p>
     </div>
    </form>
  </body>
</html>