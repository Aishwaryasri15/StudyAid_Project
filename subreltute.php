<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>studyaid</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.0.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php
include "connection.php";
$sub = $_GET['sub'];
 
$querysub="SELECT * FROM tutorsubjects WHERE SUBJECT_NAME = '$sub'";
$datasub=mysqli_query($q,$querysub);
$a = mysqli_num_rows($datasub);
    ?>
<body>

  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">StudyAid</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
    <section id="tutors" style="text-align:left">
        <div class="container text-center" data-aos="zoom-in">

        <header class="section-header" style="padding-top:100px;">
          <h3><?php echo "$sub"; ?> Tutors</h3>
          <p></p>
        </header>
<?php 
if($a!=0)
{
    ?>

        <div class="row container-fluid py-2" style="padding-left:20px">
 <?php
            
while($r4= mysqli_fetch_assoc($datasub))
{
$email=$r4['email'];

$query="SELECT * FROM tutorsprofile WHERE EMAIL = '$email'";
$data=mysqli_query($q,$query);
while($r= mysqli_fetch_assoc($data))   
{
    
$name = $r['tutor_name'];
$pic = $r['propic_link'];
$qualification = $r['tutor_qualification'];
$city = $r['city'];
$bio = $r['bio'];
 $phone = $r['tutor_phonenumber'];   
$insti = $r['Institution'];
    
}
    $query1="SELECT * FROM tutorsubjects WHERE EMAIL = '$email' AND SUBJECT_NAME = '$sub'";
$data1=mysqli_query($q,$query1);
while($r1= mysqli_fetch_assoc($data1))   
{
  $online = $r1['onlineclasses'];
  $videolink = $r1['video_link'];
    
  
}
?>

    <!-- ======= tutors Section ======= -->
            
   <!-- <div class="container text-center" data-aos="zoom-in"> -->
     

          <div class="col-md-4 col-12 col-sm-12 border border-right-0 border-info rounded-lg py-1 shadow p-3 mb-3 bg-dark text-white" data-aos="fade-up" data-aos-delay="100"  >
            
                <div class="row">
              <div class="col-4 col-sm-4 col-md-4 " >
                <img src='assets/img/tutorpics/<?php echo "$pic";?>'  alt="" style="height: 60px; width: 100%">
              </div>
                    <div class="col-8 col-sm-8 col-md-8 " style="text-align:left;padding-top:1px"><?php if($insti != ""){echo "$insti";} else { echo "Individual Trainer"; } ?><br><div style="overflow:hidden;width:100%;height:32px;font-size:12px;text-align:left"><?php if($online=='yes'){  ?> <span class="dot shadow" style="height:10px;
  width: 10px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;"></span>     <?php echo "Online Classes Available"; } else {?><span class="dot" style="height:10px;
  width: 10px;
  background-color:orange;
  border-radius: 50%;
  display: inline-block;"></span>     <?php  echo "Offline classes only";} ?> <br><i class="fa fa-phone" aria-hidden="true"></i>
<?php echo $phone; ?></div> </div>
                    </div>
             
              
              <div class="row">
                        <div class="col-4" style="font-size:9px; text-align:left;padding-top:8px"><div style="width:100%;overflow: hidden;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp;<b> <?php echo "$name"; ?></div><br><i class="fa fa-map-marker" aria-hidden="true" style="color:orange; font-size:13px"> </i>&nbsp; &nbsp;<?php echo "$city"; ?></b></div>
                        <div class="col-8"><div class="row" style="padding-top:2px"><div class="col-5"><a href='<?php if($videolink!=""){
        echo "$videolink";
    }
                                    else{
                                         echo "#";
                                        
                                    }?> ' <?php if($videolink==""){ ?> onclick="myJsFunc();"<?php }  else { ?>target="_blank" <?php }?> >
                            <button class="btn btn-info" style="width:85px !important;height:22px;font-size:7px;text-align:left; "><b>Watch Demo&nbsp;&nbsp;<i class="fa fa-play" aria-hidden="true" style=" font-size:8px"></i></b></button></a> </div>
                  <div class="col-7"><a href='tutor.php?email=<?php echo"$email"; ?>'><button class="btn btn-info" style="width:80px !important;height:22px;font-size:7px;text-align:left; vertical-align: middle;"><b>View Profile</b></button></a></div>          
                            
                            
                  </div>
                        <button class="btn btn-success " style="width:100% !important;height:24px;font-size:10px; "> &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true" style="font-size:12px"></i><b>&nbsp;&nbsp;&nbsp;Request&nbsp; Call &nbsp;Back&nbsp;</b></button>
                        </div>
              
              </div>
              
              
              
              
              
              
              
        
              
          </div>
<?php
}
    ?>
          

        </div>

    
   <?php
   }
   else
   {
       ?>
       <div style="padding-bottom:50px" >
           <h2>Currently no Tutors in our Database are teaching this subject.<br> We are in touch with best tutors of country to teach the subject. <br> See you soon </h2>
       </div>
        
       <?php
       
   }
   ?> </div>
   
   
   <!-- End of tutors Section -->



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
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    function myJsFunc() {
    alert("The Tutor has not uploaded his Demo Video related to this subject");
}</script>
</body>

</html>