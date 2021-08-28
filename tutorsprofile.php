<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/tutorprofile.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    
</head>
<?php session_start();
     $r=$_SESSION['user'];
	 $s=$_SESSION['pass'];
	session_write_close(); 	

include "connection.php";
$querysub="SELECT * FROM tutorsprofile WHERE email='$r' AND password = '$s'";
$datasub=mysqli_query($q,$querysub);
while($r4= mysqli_fetch_assoc($datasub))
{
$id = $r4['id'];
$name = $r4['tutor_name'];
$phonenumber = $r4['tutor_phonenumber'];
$qualification = $r4['tutor_qualification'];
$subjects = $r4['subjects'];
$email = $r4['email'];
$sitelink = $r4['sitelink'];
$gender = $r4['gender'];
$city = $r4['city'];
$pincode = $r4['pincode'];
$bio = $r4['bio'];
$propic = $r4['propic_link'];
$Institution = $r4['Institution'];
   
}
    if($r)
    {




 $query2="SELECT * FROM tutorsubjects WHERE email='$email'";
 $data2= mysqli_query($q,$query2);
$i = mysqli_num_rows($data2);
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
    
    
    <!--------------------start---------->
    <main style="padding-top: 60px">
<div class="container emp-profile" >
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" style="height:200px; width:300px" >
                            <img src= '<?php echo "assets/img/tutorpics/$propic" ; ?>?nocache=<?php echo time(); ?>' class="img-fluid" alt="profile">
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo "$name"; ?>
                                    </h5>
                                    <h6>
                                        Teaches <?php echo "$subjects"; ?>
                                    </h6>
                                    <p class="proile-rating">Qualification : <span><?php echo "$qualification";?></span></p>
                                    <?php 
                                    if($i==0){
                                    ?>
                                   <span class='simple-blink-text'> <h6> Please add the Subjects you teach and their respective video links in the Subjects section here so that Students can see and give you a call back </h6></span>
                                    <?php } ?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Subjects</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   <div class="col-md-2">
<!--<input type="submit" class="profile-edist-btn" name="btnAddMore" value="Edit Profile"/>-->
                        <h4>Tutor Profile</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            
                            <a href='<?php if($sitelink!=""){
        echo "$sitelink";
    }
                                    else{
                                         echo '#';
                                        
                                    }?> ' <?php if($sitelink==""){ ?> onclick="myJsFunc();"<?php }  else { ?>target="_blank" <?php }?> >Online Classes Link</a><br/>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$id"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$name"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if($Institution != ""){echo "$Institution";} else { echo "Individual Trainer"; } ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$email"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$phonenumber"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$bio" ?></p>
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "$city" ?></p>
                                            </div>
                                        </div>
                                        
                                         <div class="row">
                                            <div class="col-md-6">                       
                                               <label  class="btn btn-info"><a href="tutoredit.php" style="text-decoration: none; color:#fff">Edit Profile</a></label>
                                            </div>
                                           
                                        </div>
                                
                                        
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  
                                <?php
                                   
                                    while($r2 = mysqli_fetch_assoc($data2))
                                    {     
                                        $subjectname = $r2['subject_name'];
                                        $videolink = $r2['video_link'];
                                        $online = $r2['onlineclasses'];
                                        $classes = $r2['classes'];
                                        $id=$r2['id'];
                                ?>
                               
                                
                                <div class="row" style="padding-top:15px;">
                                            <div class="col-md-3" style="overflow:hidden">
                                                <label><?php echo"$subjectname"; ?></label>
                                            </div>
                                            <div class="col-md-3" style="overflow:hidden">
                                                <a href='<?php  echo"$videolink"; ?>'  target="_blank"><?php  if($videolink!=""){echo"$videolink";} else{echo"No Link Uploaded";}  ?></a>
                                            </div>
                                            <div class="col-md-1">
                                                 <label><?php  echo"$online"; ?></label>
                                               
                                            </div>
                                    <div class="col-md-3" style="overflow:hidden">
                                      <label> <?php  echo"$classes"; ?></label>
                                                
                                            </div>
                                     <div class="col-md-2" >
                                         
                                                <a href='deletesub.php?id=<?php echo "$id"; ?>' class='btn btn-info' >Drop</a>
                                            </div>
                                    
                                        </div>
                              <?php } ?>
 
                                <div class="row" style="padding-top:12px">
                                  &nbsp;&nbsp; <a href="addsubjects.php" class="btn btn-info" > Add Subjects</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <script>
    function myJsFunc() {
    alert("The Tutor does not teaches online classes ");
}</script>




<?php
    }
    else
    {
        header("Location: tutorsignup.php");
    }
    ?>
</body>

</html>