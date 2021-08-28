<?php 
session_start();
$r=$_SESSION['user'];
$s=$_SESSION['pass'];
session_write_close(); 	

include "connection.php";
$querysub="SELECT * FROM tutorsprofile WHERE email='$r' AND password = '$s'";
$datasub=mysqli_query($q,$querysub);
while($r4= mysqli_fetch_assoc($datasub))
{

$name = $r4['tutor_name'];
$phonenumber = $r4['tutor_phonenumber'];
$qualification = $r4['tutor_qualification'];
$subjects = $r4['subjects'];
$email = $r4['email'];
$password = $r4['password'];
$sitelink = $r4['sitelink'];
$propic =$r4['propic_link'];
$address = $r4['address'];
$city = $r4['city'];
$pincode = $r4['pincode'];
$bio = $r4['bio'];

$Institution = $r4['Institution'];
   
}
if(isset($_POST['update']))
{
$u_name = $_POST['name'];
$u_phonenumber = $_POST['phonenumber'];
$u_qualification = $_POST['qualification'];
$u_subjects = $_POST['subjects'];
$u_email = $_POST['email'];
$u_password = $_POST['password'];

$u_sitelink = $_POST['sitelink'];
$u_address = $_POST['address'];
$u_city = $_POST['city'];
$u_pincode = $_POST['pincode'];
$u_bio = $_POST['bio'];
$u_Institution = $_POST['Institution'];
$filename=$_FILES['pic']['name'];
$tempname=$_FILES['pic']['tmp_name'];	
if($filename!="")
{
    unlink("$email.jpeg");
$folder="assets/img/tutorpics/".$filename;
move_uploaded_file($tempname,$folder);
if($u_email==""){
rename("$folder","assets/img/tutorpics/$email.jpeg");

$filename = "$email.jpeg";
}
else
{
    rename("$folder","assets/img/tutorpics/$u_email.jpeg");
unlink("$u_email.jpeg");
$filename = "$u_email.jpeg";
}
$sql1 = "UPDATE tutorsprofile SET propic_link='$filename' WHERE email='$email'";
$data2=mysqli_query($q,$sql1);
#echo '<script>alert("Profile pic will be updated automatically with in 10min")</script>'; 
}

if($u_name!="")
{
   $sql2 = "UPDATE tutorsprofile SET tutor_name='$u_name' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    
    if($u_phonenumber!="")
{
   $sql2 = "UPDATE tutorsprofile SET tutor_phonenumber='$u_phonenumber' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_qualification!="")
{
   $sql2 = "UPDATE tutorsprofile SET tutor_qualification='$u_qualification' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_subjects!="")
{
   $sql2 = "UPDATE tutorsprofile SET subjects='$u_subjects' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_email!="")
{
   $sql2 = "UPDATE tutorsprofile SET email='$u_email' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_password!="")
{
    $u_password = md5($u_password);
   $sql2 = "UPDATE tutorsprofile SET password='$u_password' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_sitelink!="")
{
   $sql2 = "UPDATE tutorsprofile SET sitelink='$u_sitelink' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_address!="")
{
   $sql2 = "UPDATE tutorsprofile SET address='$u_address' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_city!="")
{
   $sql2 = "UPDATE tutorsprofile SET city='$u_city' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
    if($u_pincode!="")
{
   $sql2 = "UPDATE tutorsprofile SET pincode='$u_pincode' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
   if($u_bio!="")
{
   $sql2 = "UPDATE tutorsprofile SET bio='$u_bio' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
}
      if($u_Institution!="")
{
   $sql2 = "UPDATE tutorsprofile SET Institution='$u_Institution' WHERE email='$email'";
$data2=mysqli_query($q,$sql2); 
} 
    if($data2){
session_start();
        if($u_email==""){
	$_SESSION['user']=$r;
        }
        else{
       $_SESSION['user']=$u_email;     
        }
         if($u_password==""){
	$_SESSION['pass']=$s;
        }
        else{
       $_SESSION['pass']=$u_password;     
        }
    
	session_write_close(); 	
    header("Location: tutorsprofile.php");
    exit ;
    }
else
{
    $_SESSION['user']=$r;
    $_SESSION['pass']=$s;
    header("Location: tutorsprofile.php");
    
}
}
    if($s)
    {
?> 
<!DOCTYPE html>
<html lang="en">

    
    <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TUTOR PROFILE</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/tutor_main.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/tutorprofile.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    
</head>


    
<body>

  
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="index.html"><h1 class="logo mr-auto" style="font-size: 34px !important; color: #fff;">StudyAid</h1></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header --><!-- End Header -->
    
    
    <!--------------------start---------->
    <main style="padding-top: 60px">
<div class="container emp-profile" >
            <form method="post" enctype="multipart/form-data">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>&nbsp;</p>
                           
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<label style="font-size:20px; color:#18d26e">Please modify the fields you want to change and then press Update</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <input type="text" name="name" class="input100" placeholder='<?php echo "$name"; ?>'>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" class="input100" placeholder='<?php echo "$email"; ?>'>
                                                
                                            </div>
                                        </div>
                                 <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="password" class="input100" '>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="phonenumber" class="input100" placeholder='<?php echo "$phonenumber"; ?>'>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="bio" class="input100" placeholder='<?php echo "$bio" ?>'>
                                                
                                            </div>
                                        </div>
                                
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Subjects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="subjects" class="input100" placeholder='<?php echo "$subjects" ?>'>
                                                
                                            </div>
                                        </div>
                               
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="qualification" class="input100" placeholder='<?php echo "$qualification" ?>'>
                                                
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="Institution" class="input100" placeholder='<?php if($Institution != ""){echo "$Institution";} else { echo "Individual Trainer"; } ?>'>
                                                
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Sitelink</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="sitelink" class="input100" placeholder='<?php echo "$sitelink" ?>'>
                                                
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="address" class="input100" placeholder='<?php echo "$address" ?>'>
                                                
                                            </div>
                                        </div>
                                
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="city" class="input100" placeholder='<?php echo "$city" ?>'>
                                                
                                            </div>
                                        </div>
                                
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="pincode" class="input100" placeholder='<?php echo "$pincode" ?>'>
                                                
                                            </div>
                                        </div>
                                
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Upload a new Profile Picture</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="pic" class="input100">
                                                
                                            </div>
                                    
                                        </div>
                                <div class="row">
                                <div class="col-mod-6">
                                <label> <input type="submit" class="btn btn-info" name="update" value="Update"> </label>  
                                    </div>
                                </div>
                                
                            </div>
                       
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</main>
<!---------------end--->
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>StudyAid</h3>
            <p>StudyAid is a small effort of us to make sure that students can find their best tutors in their locality </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Krishnanagar <br>
              Thakurpalli Road,opposite TRTC<br>
              Agartala, Tripura (W)<br>
              Pin:799001<br>
              <strong>Phone:</strong> 7827249896<br>
              <strong>Email:</strong> Studyaid78@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/StudyAidEducat1?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/studyaid.in/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/education.study_aid/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/company/studyaideducation" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>studyaid</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://nofrdz.com/">Nofrdz.pvt lmtd</a>
      </div>
    </div>
  </footer><!-- End Footer -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
<?php
    }
        else
    {
        header("Location: tutorsignup.php");
    }
    ?>
</body>

</html>