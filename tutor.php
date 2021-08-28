   <?php
include "connection.php";
$email = $_GET['email'];
error_reporting(0);
$query="SELECT * FROM tutorsprofile WHERE EMAIL = '$email'";
$data=mysqli_query($q,$query);
$a = mysqli_num_rows($data);
while($r4= mysqli_fetch_assoc($data))   
{
$name = $r4['tutor_name'];
$phonenumber = $r4['tutor_phonenumber'];
$qualification = $r4['tutor_qualification'];
$subjects = $r4['subjects'];
$email = $r4['email'];
$sitelink = $r4['sitelink'];
$propic =$r4['propic_link'];
$address = $r4['address'];
$pincode = $r4['pincode'];
$bio = $r4['bio'];
$Institution = $r4['Institution'];
    
}
$title = $name;

    ?>



<html lang="en">
<head>
    
    
    
    
<meta charset="utf-8">
<title><?php echo htmlspecialchars($title);?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content='<?php echo $name." Tutor at STUDYAID.IN Teaches \n".$subjects." See more about him by clicking this link"; ?>' />
<meta name="author" content="http://iweb-studio.com" />
<!-- css -->
<link href="assets/css/tutorcss/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/tutorcss/cubeportfolio.min.css" rel="stylesheet" />
<link href="assets/css/tutorcss/style.css" rel="stylesheet" />

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
    
    
    
<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

    
    
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f11826fb745880012eaab7d&product=inline-share-buttons" async="async"></script>
</head>
    
 
    
<body>
   
    
 <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">StudyAid</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header>

<div id="wrapper">
	 
	<section id="content" style="padding-top: 125px">
	<div class="container">
	    <?php
    if($a!=0)
    {
        ?>
		<div class="row">
			<div class="col-lg-8">
				<h2 style="color : #efb480"><b><?php echo "$name"; ?></b></h2>
                <h4 style="color : #efb480">QUALIFICATION : <?php echo "$qualification"; ?></h4>
				<img src='assets/img/tutorpics/<?php echo "$propic"; ?>' alt=""  height="400px" width="100%" />

			
		<h5>INSTITUTION : <?php if($Institution != ""){echo "$Institution";} else { echo "Individual Trainer"; } ?></h5>
                <h5>SITELINK : <?php if($sitelink != ""){echo "$sitelink";} else { echo "Has no individual site"; } ?></h5>
                <h5>ADDRESS : <?php echo "$address"; ?> <br>PIN: <?php echo "$pincode"; ?></h5>
                <h5>EMAIL : <?php echo "$email"; ?></h5>
		<p style="font-size:18px">
        
		<?php echo "$bio"; ?>
		
		</p>
				</div>
            
            
            
            <div class="col-lg-4" style="padding-top:55px">
				<aside class="right-sidebar">
				
				
				<div class="widget">
					<h4 class="widgetheading" ><b>SUBJECTS</b></h4>
					<ul class="recent">
		<?php
            $query1="SELECT * FROM tutorsubjects WHERE EMAIL = '$email'";
$data1=mysqli_query($q,$query1);
            
while($r1= mysqli_fetch_assoc($data1))   
{
            
            $sub_name = $r1['subject_name'];
            $video_link = $r1['video_link'];
            $online = $r1['onlineclasses'];
        $classes = $r1['classes'];

            ?>
			
						<li>
						
						<h4><b><?php echo "$sub_name"; ?></b></h4>
                            <h5>CLASSES : <?php echo "$classes"; ?></h5>
                            <h5>ONLINE CLASSES : <?php if($online=='yes'){ echo "YES";} else { echo "NO"; }  ?></h5>
						
                            <p>DEMO VIDEO LINK FOR <?php echo "$sub_name"; ?>:
							 <?php if($video_link!="") {echo "$video_link";} else {echo "#";} ?>
						</p>
						</li>
						<?php
                        
                        }
                        ?>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<div class="sharethis-inline-share-buttons" data-title="STUDYAID.IN" data-description="Find more about the tutor by visiting our site"></div>
				</div>
				</aside>
			</div>
			
		</div>


	</div>
	</section>
<?php
}
else
{
    
?>
	<h3 style="padding-top:125px;padding-bottom:125px;">No tutor found please check the link</h3>
	<?php 
}
?>
	
</div>
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



<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

</body>
</html>